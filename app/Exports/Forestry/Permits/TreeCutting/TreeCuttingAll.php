<?php

namespace App\Exports\Forestry\Permits\TreeCutting;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TreeCuttingAll implements WithMultipleSheets
{
    protected $treecuttings;

    public function __construct($treecuttings)
    {
        $this->treecuttings = $treecuttings;
    }

    public function sheets(): array
    {
        $sheets = [];

        if ($this->treecuttings->isEmpty()) {
            $sheets[] = new class implements FromCollection, WithTitle, WithHeadings, WithStyles {
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

        $grouped = $this->treecuttings->groupBy(function ($item) {
            return $item->client_address ?: 'Unknown Address';
        });

        $counter = 1;

        foreach ($grouped as $address => $items) {
            $sheets[] = new class($address, $items, $counter) implements FromCollection, WithTitle, WithHeadings, WithStyles, WithEvents {
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
                    return $this->items->map(function ($item) {
                        return [
                            'Name Permitee' => $item->name_permitee,
                            'Location' => $item->location,
                            'No. Trees' => $item->no_trees,
                            'Species' => $item->species,
                            'Approved Volume' => $item->approved_volume,
                            'Date Issuance' => \Carbon\Carbon::parse($item->date_issuance)->format('Y-m-d'),
                            'Expiration Date' => \Carbon\Carbon::parse($item->expiration_date)->format('Y-m-d'),
                            'Seed Requirements' => $item->seed_requirements,
                        ];
                    });
                }

                public function title(): string
                {
                    $clean = preg_replace('/[^A-Za-z0-9]/', '', $this->address);
                    $clean = trim($clean);
                    return substr($clean ?: 'Sheet_' . $this->counter, 0, 31);
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

                            foreach (range('A', 'I') as $column) {
                                $sheet->getColumnDimension($column)->setAutoSize(true);
                            }

                            $lastRow = $sheet->getHighestRow();
                            $lastColumn = $sheet->getHighestColumn();
                            $tableRange = "A1:{$lastColumn}{$lastRow}";
                            $tableName = 'Table_' . preg_replace('/[^A-Za-z0-9]/', '', $this->address);

                            try {
                                $table = new \PhpOffice\PhpSpreadsheet\Worksheet\Table($tableRange);
                                $table->setName($tableName);
                                $sheet->addTable($table);
                            } catch (\PhpOffice\PhpSpreadsheet\Exception $e) {
                                // Fail silently if table cannot be added
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
