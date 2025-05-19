<?php

namespace App\Imports\Lands;

use App\Models\Address;
use App\Models\Lands\FPA;
use App\Models\Lands\FPAParents;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Carbon\Carbon;
class FPAImport implements ToModel, WithHeadingRow
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
            'type' => 'FPA',
        ]);

        $parent = FPAParents::firstOrCreate([
            'name'    => $row['name'],
            'address' => $address->address,
            'type'    => 'FPA',
        ]);

        $dateRegistered = $this->parseDate($row['date_registered_or_renewal']);
        $dateExpiry = $this->parseDate($row['date_expiry']);

        $existingChainsaw = FPA::where([
            ['name', '=', $row['name']],
            ['address', '=', $row['address']],
            ['date_registered', '=', $dateRegistered],
            ['date_expiry', '=', $dateExpiry],
            ['control_no', '=', $row['control_no']],
            ['purpose', '=', $row['purpose']],
            ['remarks', '=', $row['remarks']],
            ['client_address', '=', $address->address],
            ['permit_type', '=', 'Lumber Dealer'],
        ])->first();

        if ($existingChainsaw) {
            logger()->info('Duplicate row found, skipping import:', $row);
            return null;
        }

        return new FPA([
            'name'               => $row['name'] ?? null,
            'address'            => $row['address'] ?? null,
            'date_registered'    => $dateRegistered,
            'date_expiry'        => $dateExpiry,
            'control_no'         => $row['control_no'] ?? null,
            'purpose'            => $row['purpose'] ?? null,
            'remarks'            => $row['remarks'] ?? null,
            'client_address'     => $address->address,
            'permit_type'        => 'FPA',
            'user_id'            => Auth::id(),
            'fpa_parent_id'   => $parent->id,
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
