<?php

namespace App\Exports\Forestry\Permits\TreeCutting;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TreeCuttingTemplate implements FromArray, WithHeadings, WithColumnWidths, WithStyles
{
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

    public function array(): array
    {
        return [
            // Example data goes here
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
        ];
    }

    public function styles(Worksheet $sheet)
    {
        foreach (range('A', 'H') as $column) {
            for ($row = 1; $row <= 10000; $row++) {
                $sheet->getStyle("{$column}{$row}")->getAlignment()->setWrapText(true);
            }
        }

        return [];
    }
}
