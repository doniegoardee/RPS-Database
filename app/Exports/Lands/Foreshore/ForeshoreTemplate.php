<?php

namespace App\Exports\Lands\Foreshore;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ForeshoreTemplate implements FromArray, WithHeadings, WithColumnWidths, WithStyles
{
    public function headings(): array
    {
        return [
            'Applicant',
            'Location',
            'FLA No.',
            'Area',
            'Remarks_Status',
        ];
    }

    public function array(): array
    {
        return [
            // Add example data if needed
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
        ];
    }

    public function styles(Worksheet $sheet)
    {
        // Enable wrap text for each column (rows 1 to 100)
        foreach (range('A', 'E') as $column) {
            for ($row = 1; $row <= 10000; $row++) {
                $sheet->getStyle("{$column}{$row}")->getAlignment()->setWrapText(true);
            }
        }

        return [];
    }
}
