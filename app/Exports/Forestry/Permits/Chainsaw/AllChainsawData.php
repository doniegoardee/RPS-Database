<?php
namespace App\Exports\Forestry\Permits\Chainsaw;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class AllChainsawData implements WithMultipleSheets
{
    protected $chainsaws;

    public function __construct($chainsaws)
    {
        $this->chainsaws = $chainsaws;
    }

    public function sheets(): array
    {
        $sheets = [];

        if ($this->chainsaws->isEmpty()) {
            $sheets[] = new class implements FromCollection, WithTitle, WithHeadings, WithStyles
            {
                public function collection()
                {
                    return collect([['No data found to export.']]);
                }

                public function title(): string
                {
                    return 'No Data';
                }

                public function headings(): array
                {
                    return ['Message'];
                }

                public function styles(Worksheet $sheet)
                {
                    return [
                        1 => [
                            'font' => ['bold' => true, 'color' => ['argb' => 'FFFF0000']],
                            'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
                        ],
                    ];
                }
            };

            return $sheets;
        }

        $grouped = $this->chainsaws->groupBy(function ($item) {
            return $item->client_address ?: 'Unknown Address';
        });

        $counter = 1;

        foreach ($grouped as $address => $items) {
            $sheets[] = new class($address, $items, $counter) implements FromCollection, WithTitle, WithHeadings, WithStyles, WithEvents
            {
                private $address;
                private $items;
                private $counter;

                public function __construct($address, $items, $counter)
                {
                    $this->address = $address;
                    $this->items = $items;
                    $this->counter = $counter;
                }

                public function collection()
                {
                    // Convert to collection of arrays for Excel export
                    return $this->items->map(function ($item) {
                        return [
                            'Name' => $item->name,
                            'Address' => $item->address,
                            'Brand' => $item->brand,
                            'Serial Number' => $item->serial_num,
                            'Date Registered' => \Carbon\Carbon::parse($item->date_registered)->format('Y-m-d'),
                            'Date Expiry' => \Carbon\Carbon::parse($item->date_expiry)->format('Y-m-d'),
                            'Control Number' => $item->control_no,
                            'Date Acquired' => \Carbon\Carbon::parse($item->date_acquired)->format('Y-m-d'),
                            'Horse Power' => $item->horse_power,
                            'Length Guidebar' => $item->length_guidebar,
                            'Sticker' => $item->sticker,
                            'Purpose' => $item->purpose,
                            'Remarks' => $item->remarks,
                        ];
                    });
                }

                public function title(): string
                {
                    $clean = preg_replace('/[^A-Za-z0-9]/', '', $this->address);
                    $clean = trim($clean);
                    if (empty($clean)) {
                        $clean = 'Sheet_' . $this->counter;
                    }
                    return substr($clean, 0, 31);
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

                public function styles(Worksheet $sheet)
                {
                    return [
                        1 => [
                            'font' => ['bold' => true],
                            'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
                        ],
                    ];
                }

                public function registerEvents(): array
                {
                    return [
                        AfterSheet::class => function (AfterSheet $event) {
                            $sheet = $event->sheet->getDelegate();

                            foreach (range('A', 'O') as $column) {
                                if ($column !== 'L') {
                                    $sheet->getColumnDimension($column)->setAutoSize(true);
                                }
                            }

                            $sheet->getColumnDimension('L')->setWidth(33);

                            $sheet->getStyle('L1:L' . $sheet->getHighestRow())
                                ->getAlignment()
                                ->setWrapText(true);

                            $lastRow = $sheet->getHighestRow();
                            $lastColumn = $sheet->getHighestColumn();
                            $tableRange = "A1:{$lastColumn}{$lastRow}";

                            $tableName = 'Table_' . preg_replace('/[^A-Za-z0-9]/', '', $this->address);

                            try {
                                $table = new \PhpOffice\PhpSpreadsheet\Worksheet\Table($tableRange);
                                $table->setName($tableName);
                                $sheet->addTable($table);
                            } catch (\PhpOffice\PhpSpreadsheet\Exception $e) {
                            }

                            $sheet->setAutoFilter($tableRange);
                        },


                    ];
                }
            };

            $counter++;
        }

        return $sheets;
    }
}
