<?php

namespace App\Exports\Lands;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class LandsTemplate implements FromArray, WithHeadings, WithColumnWidths, WithStyles
{
    public function headings(): array
    {
        return [
            'Applicant',
            'Applicant No.',
            'Lot No.',
            'Area',
            'Location',
            'dpli_mi_si',
        ];
    }

    public function array(): array
    {
        return [
            // Example empty row for template
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
        ];
    }

    public function styles(Worksheet $sheet)
    {
        // Apply wrap text for header and several rows below it
        foreach (range('A', 'F') as $column) {
            for ($row = 1; $row <= 10000; $row++) {
                $sheet->getStyle("{$column}{$row}")->getAlignment()->setWrapText(true);
            }
        }

        return [];
    }
}
