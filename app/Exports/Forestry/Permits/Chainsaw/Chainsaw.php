<?php

namespace App\Exports\Forestry\Permits\Chainsaw;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class Chainsaw implements FromArray, WithHeadings, WithColumnWidths, WithStyles
{
    public function headings(): array
    {
        return [
            'Name',
            'Address',
            'Brand',
            'Serial Number',
            'Date Registered Or Renewal',
            'Date Expiry',
            'Control No.',
            'Date Acquired',
            'Horse Power',
            'Length Guidebar',
            'DENR Sticker No.',
            'Purpose',
            'Remarks',
        ];
    }

    public function array(): array
    {
        return [
            // Add your data arrays here
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
        $sheet->getStyle('A1:M1048576')->getAlignment()->setWrapText(true);
    }
}
