<?php

namespace App\Exports\Lands;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;


class LandsTemplate implements FromArray, WithHeadings
{
    public function headings(): array
    {
        return [
            'Applicant',
            'Lot No.',
            'Area',
            'Date Approved',
            'Location',
            'dpli_mi_si',
        ];
    }

    public function array(): array
    {
        return [
            // [
            //     'John Doe',
            //     '2131232',
            //     '123213213213',
            //     '12-12-2025',
            //     'San. Gabriel, Tuguegarao City, Cagayan',
            //     'asdasdasadsad',
            //     'New',
            //     'Renovation .....',

            // ],
        ];
    }
}

