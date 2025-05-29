<?php

namespace App\Exports\Forestry\Permits\TFPL;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TFPLAll implements WithMultipleSheets
{
    protected $tfpl;

    public function __construct($tfpl)
    {
        $this->tfpl = $tfpl;
    }

    public function sheets(): array
    {
        $sheets = [];

        if ($this->tfpl->isEmpty()) {
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

        $grouped = $this->tfpl->groupBy(function ($item) {
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
                            'Place of Loading' => $item->place_of_loading,
                            'Destination' => $item->destination,
                            'Species' => $item->spicies,
                            'Permit No.' => $item->permit_no,
                            'Volume to Transport' => $item->volume_to_transport,
                            'No. Finish Product' => $item->no_finish_product,
                            'No. Finish Lumber' => $item->no_finish_lumber,
                            'Date Transport' => \Carbon\Carbon::parse($item->date_transport)->format('Y-m-d'),
                            'Cert and Oath' => $item->cert_and_oath,
                            'Inspection' => $item->inspection,
                            'Remarks' => $item->remarks,

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

                            foreach (range('A', 'L') as $column) {
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
