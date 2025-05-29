<?php

namespace App\Exports\Lands;

use App\Models\Lands\Lands;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Events\AfterSheet;

class ClientData implements FromCollection, WithHeadings, WithEvents, WithColumnWidths
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
        return Lands::where('client_id', $this->client_id)
                    ->where('client_address', $this->client_address)
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
