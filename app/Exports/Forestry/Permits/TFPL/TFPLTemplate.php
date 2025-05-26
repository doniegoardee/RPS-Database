<?php

namespace App\Exports\Forestry\Permits\TFPL;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TFPLTemplate implements FromArray, WithHeadings
{
    public function headings(): array
    {
        return [
            'Name Permitee',
            'Place of Loading',
            'Destination',
            'Species',
            'Volume to Transport',
            'No. Finish Product',
            'No. Finish Lumber',
            'Date Transport',
            'Remarks',
        ];
    }

    public function array(): array
    {
        return [
            // [
            //     'John Doe',
            //     'San. Gabriel, Tuguegarao City, Cagayan',
            //     '12-12-2025',
            //     '12-12-2025',
            //     '1234567890',
            //     'Renovation .....',
            //     'New',

            // ],
        ];
    }
}
