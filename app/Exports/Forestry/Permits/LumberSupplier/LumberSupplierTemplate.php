<?php

namespace App\Exports\Forestry\Permits\LumberSupplier;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LumberSupplierTemplate implements FromArray, WithHeadings
{
    public function headings(): array
    {
        return [
            'Name',
            'Business Name',
            'Location',
            'Volume',
            'Date Issuance',
            'Date Expiration',
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
