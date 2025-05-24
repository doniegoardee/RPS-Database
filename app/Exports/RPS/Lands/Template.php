<?php

namespace App\Exports\RPS\Lands;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;


class Template implements FromArray, WithHeadings
{
    public function headings(): array
    {
        return [
            'Applicant',
            'Lot No.',
            'Area',
            'Date Approved',
            'Location',
            'DPLI/MI/SI',
            'Status',
            'Remarks',
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

