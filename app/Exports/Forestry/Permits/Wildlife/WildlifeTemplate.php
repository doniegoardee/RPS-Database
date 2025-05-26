<?php

namespace App\Exports\Forestry\Permits\Wildlife;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WildlifeTemplate implements FromArray, WithHeadings
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
