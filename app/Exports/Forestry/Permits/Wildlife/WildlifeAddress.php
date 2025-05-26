<?php


namespace App\Exports\Forestry\Permits\Wildlife;

use App\Models\Forestry\Permits\TFPL;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Events\AfterSheet;

class WildlifeAddress implements FromCollection, WithHeadings, WithEvents, WithColumnWidths
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
                        'name',
                        'address',
                        'permit_no',
                        'date_issuance',
                        'date_expiry',
                        'fee',
                        'species_name',
                        'description',
                        'quantity',
                        'unit_measure',
                        'origin',
                        'destination',
                        'purpose',
                    ]);
    }

    public function headings(): array
    {
        return [
            'Name',
            'Address',
            'Permit No.',
            'Date issuance',
            'Date Expiry',
            'Fee',
            'Species Name',
            'Description',
            'Quantity',
            'Unit Measure',
            'Origin',
            'Destination',
            'Purpose',
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
            'G' => 20,
            'H' => 20,
            'I' => 20,
            'J' => 20,
            'K' => 20,
            'L' => 20,
            'M' => 20,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setAutoFilter('A1:M1');
            },
        ];
    }
}
