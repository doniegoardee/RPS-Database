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
    protected $address;
    protected $parentCache = [];
    protected $startTime;
    protected $headerValidated = false;

    public function __construct($address, $startTime)
    {
        $this->requestAddress = $address;
        $this->startTime = $startTime;

        $this->address = Address::firstOrCreate([
            'address' => $this->requestAddress,
            'type' => 'Lumber Dealer',
        ]);
    }

    public function model(array $row)
    {
        if (!$this->headerValidated) {
            $this->validateHeader(array_keys($row));
            $this->headerValidated = true;
        }

        if (empty(trim($row['name'] ?? '')) || empty(trim($row['business_name'] ?? ''))) {
            return null;
        }

        $elapsed = microtime(true) - $this->startTime;
        if ($elapsed >= 55) {
            throw new \Exception('Import cancelled: exceeded time limit. Please reduce the number of rows.');
        }

        $parentKey = strtolower(trim($row['name'] ?? ''));
        if (!isset($this->parentCache[$parentKey])) {
            $this->parentCache[$parentKey] = LumDealerParent::firstOrCreate([
                'name'    => $row['name'],
                'address' => $this->address->address,
                'type'    => 'Lumber Dealer',
            ]);
        }

        $parent = $this->parentCache[$parentKey];

        $dateIssuance = $this->parseDate($row['date_issuance']);
        $expirationDate = $this->parseDate($row['date_expiration']);

        $dealerExists = LumDealer::where([
            ['name', '=', $row['name']],
            ['business_name', '=', $row['business_name']],
            ['location', '=', $row['location']],
            ['supplier_name', '=', $row['supplier_name']],
            ['volume', '=', $row['volume']],
            ['date_issuance', '=', $dateIssuance],
            ['date_expiration', '=', $expirationDate],
            ['client_address', '=', $this->address->address],
            ['permit_type', '=', 'Lumber Dealer'],
        ])->exists();

        if ($dealerExists) {
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
            'client_address'     => $this->address->address,
            'permit_type'        => 'Lumber Dealer',
            'user_id'            => Auth::id(),
            'dealer_parent_id'   => $parent->id,
        ]);
    }

    protected function validateHeader(array $headerKeys)
    {
        $expected = [
            'name',
            'business_name',
            'location',
            'supplier_name',
            'volume',
            'date_issuance',
            'date_expiration',
        ];

        if ($headerKeys !== $expected) {
            throw new \Exception('Import cancelled: Excel file headers do not match the expected template');
        }
    }

    protected function parseDate($value)
    {
        if (is_numeric($value)) {
            return Carbon::instance(Date::excelToDateTimeObject($value))->format('Y-m-d');
        }

        $formats = [
            'Y-m-d', 'Y/m/d', 'm-d-Y', 'm/d/Y', 'd-m-Y', 'd/m/Y',
            'Ymd', 'dmY', 'mdY', 'M d, Y', 'd M Y', 'Y M d',
            'F d, Y', 'd F Y', 'F j, Y', 'j F Y', 'd-M-Y', 'd-M-y',
            'Y-M-d', 'Y-M-d H:i:s', 'Y-m-d H:i:s', 'd/m/y', 'm/d/y',
            'd-m-y', 'Y.m.d', 'YmdHis'
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
