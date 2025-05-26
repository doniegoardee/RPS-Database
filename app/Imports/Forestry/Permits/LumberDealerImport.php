<?php

namespace App\Imports\Forestry\Permits;

use App\Models\Address;
use App\Models\Forestry\Permits\LumDealer;
use App\Models\Forestry\Permits\LumDealerParent;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Carbon\Carbon;

class LumberDealerImport implements ToModel, WithHeadingRow
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
            'type' => 'Lumber Dealer',
        ]);

        $parent = LumDealerParent::firstOrCreate([
            'name'    => $row['name'],
            'address' => $address->address,
            'type'    => 'Lumber Dealer',
        ]);

        $dateIssuance = $this->parseDate($row['date_issuance']);
        $expirationDate = $this->parseDate($row['date_expiration']);

        $dealer = LumDealer::where([
            ['name', '=', $row['name']],
            ['business_name', '=', $row['business_name']],
            ['location', '=', $row['location']],
            ['supplier_name', '=', $row['supplier_name']],
            ['volume', '=', $row['volume']],
            ['date_issuance', '=', $dateIssuance],
            ['date_expiration', '=', $expirationDate],
            ['client_address', '=', $address->address],
            ['permit_type', '=', 'Lumber Dealer'],
        ])->first();

        if ($dealer) {
            logger()->info('Duplicate row found, skipping import:', $row);
            return null;
        }

        return new LumDealer([
            'name'               => $row['name'] ?? null,
            'business_name'      => $row['business_name'] ?? null,
            'location'           => $row['location'] ?? null,
            'supplier_name'      => $row['supplier_name'] ?? null,
            'volume'             => $row['volume'] ?? null,
            'date_issuance'      => $dateIssuance,
            'date_expiration'    => $expirationDate,
            'client_address'     => $address->address,
            'permit_type'        => 'Lumber Dealer',
            'user_id'            => Auth::id(),
            'dealer_parent_id'   => $parent->id,
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
