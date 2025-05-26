<?php

namespace App\Exports\Forestry\Permits\TreeCutting;

use App\Models\Forestry\Permits\TreeCutting;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Events\AfterSheet;

class TreeCuttingData implements FromCollection, WithHeadings, WithEvents, WithColumnWidths
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
        return TreeCutting::where('cutting_parent_id', $this->client_id)
                    ->where('client_address', $this->client_address)
                    ->get([
                        'name_permitee',
                        'location',
                        'no_trees',
                        'species',
                        'approved_volume',
                        'date_issuance',
                        'expiration_date',
                        'seed_requirements'
                    ]);
    }

    public function headings(): array
    {
        return [
            'Name Permitee',
            'Location',
            'No. Trees',
            'Species',
            'Approved Volume',
            'Date Issuance',
            'Expiration Date',
            'Seed Requirements',
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
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setAutoFilter('A1:H1');
            },
        ];
    }
}
