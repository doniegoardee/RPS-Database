<?php

namespace App\Exports\RPS\Forestry\Permits;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LumberDealerExport implements FromArray, WithHeadings
{
    public function headings(): array
    {
        return [
            'Name',
            'Address',
            'Date Registered Or Renewal',
            'Date Expiry',
            'Control No.',
            'Purpose',
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
