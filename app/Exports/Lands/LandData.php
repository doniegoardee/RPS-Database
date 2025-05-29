<?php


namespace App\Exports\Lands;

use App\Models\Lands\Lands;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Events\AfterSheet;

class LandData implements FromCollection, WithHeadings, WithEvents, WithColumnWidths
{
    protected $address;
    protected $type;

    public function __construct($address, $type)
    {
        $this->address = $address;
        $this->type = $type;
    }

    public function collection()
    {
        return Lands::where('client_address', $this->address)
                    ->where('lands_type', $this->type)
                    ->get([
                        'applicant',
                        'applicant_no',
                        'location',
                        'lot_no',
                        'area',
                        'dpli_mi_si'
                    ]);
    }

    public function headings(): array
    {
        return [
            'Applicant',
            'Applicant No.',
            'Location',
            'Lot No.',
            'Area',
            'DPLI/MI/SI',
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 25,
            'B' => 30,
            'C' => 20,
            'D' => 15,
            'E' => 15,
            'F' => 20,
            'G' => 25,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setAutoFilter('A1:G1');
            },
        ];
    }
}
