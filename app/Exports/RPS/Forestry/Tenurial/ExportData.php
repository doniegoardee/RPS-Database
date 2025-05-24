<?php
namespace App\Exports\RPS\Forestry\Tenurial;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportData implements WithMultipleSheets
{
    protected $type;
    protected $tiParents;

    public function __construct($type, $tiParents)
    {
        $this->type = $type;
        $this->tiParents = $tiParents;
    }

    public function sheets(): array
    {
        $sheets = [];
        $counter = 1;

        $grouped = $this->tiParents->groupBy(function ($parent) {
            return $parent->ti_address?->address ?? 'UnknownAddress';
        });

        foreach ($grouped as $address => $parentsWithAddress) {
            $allItems = collect();

            foreach ($parentsWithAddress as $parent) {
                $items = $parent->TI->map(function ($instrument) {
                    return [
                        'name_lessee' => $instrument->name_lessee,
                        'address' => $instrument->address,
                        'issue_date' => $instrument->issue_date,
                        'expired_date' => $instrument->expired_date,
                        'tenur_no' => $instrument->tenur_no,
                        'total_area' => $instrument->total_area,
                        'status' => $instrument->status,
                        'remarks' => $instrument->remarks,
                    ];
                });

                $allItems = $allItems->concat($items);
            }

            if ($allItems->isEmpty()) {
                continue;
            }

            $sheets[] = new class($address, $allItems, $counter) implements FromCollection, WithTitle, WithHeadings, WithStyles, WithEvents
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
                    return collect($this->items);
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
                        'Name Lessee',
                        'Address',
                        'Issue Date',
                        'Expired Date',
                        'Tenur No',
                        'Total Area',
                        'Status',
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

                            $sheet->getColumnDimension('A')->setWidth(30);
                            $sheet->getColumnDimension('B')->setWidth(40);
                            $sheet->getColumnDimension('C')->setWidth(15);
                            $sheet->getColumnDimension('D')->setWidth(15);
                            $sheet->getColumnDimension('E')->setWidth(15);
                            $sheet->getColumnDimension('F')->setWidth(15);
                            $sheet->getColumnDimension('G')->setWidth(15);
                            $sheet->getColumnDimension('H')->setWidth(30);

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
