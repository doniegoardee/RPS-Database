<?php

namespace App\Exports\Forestry\Permits\Wildlife;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class WildlifeTemplate implements FromArray, WithHeadings, WithColumnWidths, WithStyles
{
    public function headings(): array
    {
        return [
            'Name',
            'Address',
            'Permit No',
            'Date Issuance',
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

    public function array(): array
    {
        return [
            // Example data (optional)
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 33,
            'B' => 33,
            'C' => 33,
            'D' => 33,
            'E' => 33,
            'F' => 33,
            'G' => 33,
            'H' => 33,
            'I' => 33,
            'J' => 33,
            'K' => 33,
            'L' => 33,
            'M' => 33,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        foreach (range('A', 'M') as $column) {
            for ($row = 1; $row <= 10000; $row++) {
                $sheet->getStyle("{$column}{$row}")->getAlignment()->setWrapText(true);
            }
        }

        return [];
    }
}
