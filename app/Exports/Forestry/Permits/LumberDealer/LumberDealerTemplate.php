<?php

namespace App\Exports\Forestry\Permits\LumberDealer;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class LumberDealerTemplate implements FromArray, WithHeadings, WithColumnWidths, WithStyles
{
    public function headings(): array
    {
        return [
            'Name',
            'Business Name',
            'Location',
            'Supplier Name',
            'Volume',
            'Date Issuance',
            'Date Expiration',
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
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:G1048576')->getAlignment()->setWrapText(true);
    }
}
