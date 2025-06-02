<?php


namespace App\Exports\Lands\Foreshore;

use App\Models\Forestry\Permits\TFPL;
use App\Models\Lands\Foreshore;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Events\AfterSheet;

class ForeshoreAddress implements FromCollection, WithHeadings, WithEvents, WithColumnWidths
{
    protected $address;

    public function __construct($address)
    {
        $this->address = $address;
    }

    public function collection()
    {
        return Foreshore::where('client_address', $this->address)

                    ->get([
                        'applicant',
                        'location',
                        'fla_no',
                        'area',
                        'remarks_status',
                    ]);
    }

    public function headings(): array
    {
        return [
            'Applicant',
            'Location',
            'FLA No.',
            'Area',
            'Remarks/Status',
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
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setAutoFilter('A1:E1');
            },
        ];
    }
}
