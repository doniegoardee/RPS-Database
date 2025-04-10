<?php

namespace App\Exports\RPS\Forestry\Permits;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Export implements FromArray, WithHeadings
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
            [
                'John Doe',
                'San. Gabriel, Tuguegarao City, Cagayan',
                'HHIS',
                'D123456789',
                '12-12-2025',
                '12-12-2025',
                '1234567890',
                '12-12-2025',
                '4.8',
                '36"',
                '11-111111',
                'Renovation .....',
                'New',

            ],
        ];
    }
}
