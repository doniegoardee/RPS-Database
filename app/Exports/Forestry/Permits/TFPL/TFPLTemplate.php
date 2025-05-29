<?php

namespace App\Exports\Forestry\Permits\TFPL;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TFPLTemplate implements FromArray, WithHeadings, WithColumnWidths, WithStyles
{
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

    public function array(): array
    {
        return [];
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
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:I1048576')->getAlignment()->setWrapText(true);
    }
}
