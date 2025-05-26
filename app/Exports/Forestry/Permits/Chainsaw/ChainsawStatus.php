<?php

namespace App\Exports\Forestry\Permits\Chainsaw;

use App\Models\Forestry\Permits\Chainsaw;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ChainsawStatus implements FromCollection, WithHeadings, WithEvents
{
    protected $clientAddress;
    protected $remarks;

    public function __construct($clientAddress = null, $remarks = 'new')
    {
        $this->clientAddress = $clientAddress;
        $this->remarks = $remarks;
    }

    public function collection()
    {
        $query = Chainsaw::where('remarks', $this->remarks);

        if ($this->clientAddress) {
            $query->where('client_address', $this->clientAddress);
        }

        return $query->get([
            'name',
            'address',
            'brand',
            'serial_num',
            'date_registered',
            'date_expiry',
            'control_no',
            'date_acquired',
            'horse_power',
            'length_guidebar',
            'sticker',
            'purpose',
            'remarks',
        ]);
    }

    public function headings(): array
    {
        return [
            'Name',
            'Address',
            'Brand',
            'Serial Number',
            'Date Registered',
            'Date Expiry',
            'Control Number',
            'Date Acquired',
            'Horse Power',
            'Length Guidebar',
            'Sticker',
            'Purpose',
            'Remarks',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                $lastRow = $sheet->getHighestRow();
                $lastColumn = $sheet->getHighestColumn();
                $range = 'A1:' . $lastColumn . $lastRow;

                // Apply autofilter to all columns
                $sheet->setAutoFilter($range);

                // Apply borders to all cells
                $sheet->getStyle($range)->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => 'FF000000'],
                        ],
                    ],
                ]);

                // Auto size all columns from A to last
                foreach (range('A', 'O') as $column) {
                                if ($column !== 'L') {
                                    $sheet->getColumnDimension($column)->setAutoSize(true);
                                }
                            }

                            $sheet->getColumnDimension('L')->setWidth(33);

                            $sheet->getStyle('L1:L' . $sheet->getHighestRow())
                                ->getAlignment()
                                ->setWrapText(true);
            }
        ];
    }
}
