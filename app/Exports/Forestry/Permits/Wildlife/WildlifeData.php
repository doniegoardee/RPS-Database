<?php

namespace App\Exports\Forestry\Permits\Wildlife;

use App\Models\Forestry\Permits\TFPL;
use App\Models\Forestry\Permits\WildLife;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Events\AfterSheet;

class WildlifeData implements FromCollection, WithHeadings, WithEvents, WithColumnWidths
{
    protected $client_id;
    protected $client_address;

    public function __construct($id, $address)
    {
        $this->client_id = $id;
        $this->client_address = $address;
    }

    public function collection()
    {
        return WildLife::where('wildlife_parent_id', $this->client_id)
                    ->where('client_address', $this->client_address)
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
