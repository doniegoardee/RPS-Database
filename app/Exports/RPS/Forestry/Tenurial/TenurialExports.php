<?php

namespace App\Exports\RPS\Forestry\Tenurial;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TenurialExports implements  FromArray, WithHeadings
{

    public function headings(): array
    {
        return [
            'Name Lessee',
            'Address',
            'Issue Date',
            'Expired Date',
            'Tenur No',
            'Total Area',
            'Status',
            'Remarks',
        ];
    }

    public function array(): array
    {
        return [
            // [
            //     'John Doe',
            //     'San. Gabriel, Tuguegarao City, Cagayan',
            //     'HHIS',
            //     'D123456789',
            //     '12-12-2025',
            //     '12-12-2025',
            //     '1234567890',
            //     '12-12-2025',
            //     '4.8',
            //     '36"',
            //     '11-111111',
            //     'Renovation .....',
            //     'New',

            // ],
        ];
    }
}
