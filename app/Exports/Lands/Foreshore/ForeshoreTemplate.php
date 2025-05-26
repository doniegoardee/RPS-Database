<?php

namespace App\Exports\Lands\Foreshore;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ForeshoreTemplate implements FromArray, WithHeadings
{
    public function headings(): array
    {
        return [
            'Applicant',
            'Location',
            'FLA No.',
            'Area',
            'Remarks/Status',
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
