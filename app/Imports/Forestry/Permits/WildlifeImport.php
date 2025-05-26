<?php

namespace App\Imports\Forestry\Permits;

use App\Models\Address;
use App\Models\Forestry\Permits\WildLife;
use App\Models\Forestry\Permits\WildLifeParent;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Carbon\Carbon;

class WildlifeImport implements ToModel, WithHeadingRow
{
    protected $requestAddress;

    public function __construct($address)
    {
        $this->requestAddress = $address;
    }

    public function model(array $row)
    {
        logger()->info('Importing row:', $row);

        $address = Address::firstOrCreate([
            'address' => $this->requestAddress,
            'type' => 'Wildlife',
        ]);

        $parent = WildLifeParent::firstOrCreate([
            'name'    => $row['name'],
            'address' => $address->address,
            'type'    => 'Wildlife',
        ]);

        $dateIssuance = $this->parseDate($row['date_issuance']);
        $expirationDate = $this->parseDate($row['date_expiry']);

        $wildlife = WildLife::where([
            ['name', '=', $row['name']],
            ['address', '=', $row['address']],
            ['permit_no', '=', $row['permit_no']],
            ['date_issuance', '=', $dateIssuance],
            ['date_expiry', '=', $expirationDate],
            ['fee', '=', $row['fee']],
            ['species_name', '=', $row['species_name']],
            ['description', '=', $row['description']],
            ['quantity', '=', $row['quantity']],
            ['unit_measure', '=', $row['unit_measure']],
            ['origin', '=', $row['origin']],
            ['destination', '=', $row['destination']],
            ['purpose', '=', $row['purpose']],
            ['client_address', '=', $address->address],
            ['permit_type', '=', 'Wildlife'],
        ])->first();

        if ($wildlife) {
            logger()->info('Duplicate row found, skipping import:', $row);
            return null;
        }

        return new WildLife([
            'name'               => $row['name'] ?? null,
            'address'      => $row['address'] ?? null,
            'permit_no'           => $row['permit_no'] ?? null,
            'date_issuance'      => $dateIssuance,
            'date_expiry'    => $expirationDate,
            'fee'      => $row['fee'] ?? null,
            'species_name'             => $row['species_name'] ?? null,
            'description'             => $row['description'] ?? null,
            'quantity'             => $row['quantity'] ?? null,
            'unit_measure'             => $row['unit_measure'] ?? null,
            'origin'             => $row['origin'] ?? null,
            'destination'             => $row['destination'] ?? null,
            'purpose'             => $row['purpose'] ?? null,
            'client_address'     => $address->address,
            'permit_type'        => 'Wildlife',
            'user_id'            => Auth::id(),
            'wildlife_parent_id'   => $parent->id,
        ]);
    }

    protected function parseDate($value)
    {
        if (is_numeric($value)) {
            return Carbon::instance(Date::excelToDateTimeObject($value))->format('Y-m-d');
        }

        $formats = [
            'Y-m-d',
            'Y/m/d',
            'm-d-Y',
            'm/d/Y',
            'd-m-Y',
            'd/m/Y',
            'Ymd',
            'dmY',
            'mdY',
            'M d, Y',
            'd M Y',
            'Y M d',
            'F d, Y',
            'd F Y',
            'F j, Y',
            'j F Y',
            'd-M-Y',
            'd-M-y',
            'Y-M-d',
            'Y-M-d H:i:s',
            'Y-m-d H:i:s',
            'd/m/y',
            'm/d/y',
            'd-m-y',
            'Y.m.d',
            'YmdHis'
        ];

        foreach ($formats as $format) {
            try {
                return Carbon::createFromFormat($format, $value)->format('Y-m-d');
            } catch (\Exception $e) {
                continue;
            }
        }

        try {
            return Carbon::parse($value)->format('Y-m-d');
        } catch (\Exception $e) {
            logger()->warning('Failed to parse date: ' . $value);
            return null;
        }
    }
}
