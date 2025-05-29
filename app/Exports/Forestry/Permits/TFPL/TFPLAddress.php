<?php


namespace App\Exports\Forestry\Permits\TFPL;

use App\Models\Forestry\Permits\TFPL;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Events\AfterSheet;

class TFPLAddress implements FromCollection, WithHeadings, WithEvents, WithColumnWidths
{
    protected $address;

    public function __construct($address)
    {
        $this->address = $address;
    }

    public function collection()
    {
        return TFPL::where('client_address', $this->address)
                    ->get([
                        'name_permitee',
                        'place_of_loading',
                        'destination',
                        'species',
                        'permit_no',
                        'volume_to_transport',
                        'no_finish_product',
                        'no_finish_lumber',
                        'date_transport',
                        'cert_and_oath',
                        'inspection',
                        'remarks',
                    ]);
    }

    public function headings(): array
    {
        return [
            'Name Permitee',
            'Place of Loading',
            'Destination',
            'Species',
            'Permit No.',
            'Volume to Transport',
            'No. Finish Product',
            'No. Finish Lumber',
            'Date Transport',
            'Cert and Oath',
            'Inspection',
            'Remarks',
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
            'H' => 25,
            'I' => 25,
            'J' => 25,
            'K' => 25,
            'L' => 25,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setAutoFilter('A1:L1');
            },
        ];
    }
}
