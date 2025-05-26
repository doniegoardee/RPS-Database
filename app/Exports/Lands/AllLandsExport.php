<?php

namespace App\Exports\Lands;

use App\Models\Lands\Lands;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithTitle;

class AllLandsExport implements WithMultipleSheets
{
    use Exportable;

    protected $lands_type;

    public function __construct($lands_type)
    {
        $this->lands_type = $lands_type;
    }

    public function sheets(): array
    {
        $sheets = [];

        // Get distinct client addresses that have the lands_type
        $clientAddresses = Lands::where('lands_type', $this->lands_type)
            ->distinct()
            ->pluck('client_address');

        foreach ($clientAddresses as $address) {
            $sheets[] = new SingleClientSheet($address, $this->lands_type);
        }

        return $sheets;
    }
}


class SingleClientSheet implements FromCollection, WithHeadings, WithEvents, WithTitle
{
    protected $address;
    protected $lands_type;

    public function __construct($address, $lands_type)
    {
        $this->address = $address;
        $this->lands_type = $lands_type;
    }

    public function collection()
    {
        $data = Lands::where('client_address', $this->address)
            ->where('lands_type', $this->lands_type)
            ->get([
                'applicant',
                'location',
                'lands_type',
                'lot_no',
                'area',
                'date_approved',
                'dpli_mi_si',
            ]);

        if ($data->isEmpty()) {
            return collect([['No data found', '', '', '', '', '', '']]);
        }

        return $data;
    }

    public function headings(): array
    {
        return [
            'Applicant',
            'Location',
            'Land Type',
            'Lot No.',
            'Area',
            'Date Approved',
            'DPLI/MI/SI',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                $sheet->setAutoFilter('A1:G1');

                $sheet->getColumnDimension('A')->setWidth(25);
                $sheet->getColumnDimension('B')->setWidth(25);
                $sheet->getColumnDimension('C')->setWidth(20);
                $sheet->getColumnDimension('D')->setWidth(15);
                $sheet->getColumnDimension('E')->setWidth(15);
                $sheet->getColumnDimension('F')->setWidth(20);
                $sheet->getColumnDimension('G')->setWidth(20);
            },
        ];
    }

    // This sets the sheet title based on client_address, but Excel sheet names have limits
    public function title(): string
    {
        // Excel sheet title max length is 31 chars; trim if needed
        return substr($this->address, 0, 31);
    }
}

