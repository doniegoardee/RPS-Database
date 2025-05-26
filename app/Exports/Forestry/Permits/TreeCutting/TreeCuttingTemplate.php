<?php

namespace App\Exports\Forestry\Permits\TreeCutting;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TreeCuttingTemplate implements FromArray, WithHeadings
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
