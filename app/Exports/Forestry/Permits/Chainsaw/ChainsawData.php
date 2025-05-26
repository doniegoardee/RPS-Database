<?php

namespace App\Exports\Forestry\Permits\Chainsaw;

use App\Models\Forestry\Permits\Chainsaw;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ChainsawData implements FromCollection, WithHeadings, WithMapping, WithEvents
{
    protected $id;

    public function __construct( $id = null)
    {
        $this->id = $id;
    }

    public function collection()
    {
        $query = Chainsaw::query();


        if ($this->id) {
            $query->where('chainsaw_parent_id', $this->id);
        }

        return $query->orderBy('permit_type')->get();
    }

    public function map($chainsaw): array
    {
        return [
            $chainsaw->name,
            $chainsaw->address,
            $chainsaw->brand,
            $chainsaw->serial_num,
            $chainsaw->date_registered,
            $chainsaw->date_expiry,
            $chainsaw->control_no,
            $chainsaw->date_acquired,
            $chainsaw->horse_power,
            $chainsaw->length_guidebar,
            $chainsaw->sticker,
            $chainsaw->purpose,
            $chainsaw->remarks,
        ];
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

                $sheet->setAutoFilter($range);

                $sheet->getStyle($range)->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => 'FF000000'],
                        ],
                    ],
                ]);

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
