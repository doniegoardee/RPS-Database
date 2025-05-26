<?php

namespace App\Exports\Lands\Foreshore;

use App\Models\Forestry\Permits\LumDealer;
use App\Models\Lands\Foreshore;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Events\AfterSheet;

class ForeshoreData implements FromCollection, WithHeadings, WithEvents, WithColumnWidths
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
        return Foreshore::where('client_id', $this->client_id)
                    ->where('client_address', $this->client_address)
                    ->get([
                        'name',
                        'location',
                        'fla_no',
                        'area',
                        'remarks_status',
                    ]);
    }

    public function headings(): array
    {
        return [
            'Name',
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
            'E' => 33,

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
