<?php

namespace App\Imports\Forestry\Permits;

use App\Models\Address;
use App\Models\Forestry\Permits\Chainsaw;
use App\Models\Forestry\Permits\ChainsawParent;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Carbon\Carbon;

class ChainsawImport implements ToModel, WithHeadingRow
{
    protected $requestAddress;
    protected $startTime;

public function __construct($address, $startTime)
{
    $this->requestAddress = $address;
    $this->startTime = $startTime;
}
    public function model(array $row)
    {

         $elapsed = microtime(true) - $this->startTime;
        if ($elapsed >= 55) {
            throw new \Exception('Import cancelled: exceeded time limit. Please reduce the number of rows.');
        }

        logger()->info('Importing row:', $row);

        $address = Address::firstOrCreate([
            'address' => $this->requestAddress,
            'type' => 'chainsaw',
        ]);

        $parent = ChainsawParent::firstOrCreate([
            'name'    => $row['name'],
            'address' => $address->address,
            'type'    => 'chainsaw',
        ]);

        $dateRegistered = $this->parseDate($row['date_registered_or_renewal']);
        $dateExpiry = $this->parseDate($row['date_expiry']);
        $dateAcquired = $this->parseDate($row['date_acquired']);

        $existingChainsaw = Chainsaw::where([
            ['name', '=', $row['name']],
            ['address', '=', $row['address']],
            ['brand', '=', $row['brand']],
            ['serial_num', '=', $row['serial_number']],
            ['date_registered', '=', $dateRegistered],
            ['date_expiry', '=', $dateExpiry],
            ['control_no', '=', $row['control_no']],
            ['date_acquired', '=', $dateAcquired],
            ['horse_power', '=', $row['horse_power']],
            ['length_guidebar', '=', $row['length_guidebar']],
            ['sticker', '=', $row['denr_sticker_no']],
            ['purpose', '=', $row['purpose']],
            ['remarks', '=', $row['remarks']],
            ['client_address', '=', $address->address],
            ['permit_type', '=', 'chainsaw'],
        ])->first();

        if ($existingChainsaw) {
            logger()->info('Duplicate row found, skipping import:', $row);
            return null;
        }

        return new Chainsaw([
            'name'               => $row['name'] ?? null,
            'address'            => $row['address'] ?? null,
            'brand'              => $row['brand'] ?? null,
            'serial_num'         => $row['serial_number'] ?? null,
            'date_registered'    => $dateRegistered,
            'date_expiry'        => $dateExpiry,
            'control_no'         => $row['control_no'] ?? null,
            'date_acquired'      => $dateAcquired,
            'horse_power'        => $row['horse_power'] ?? null,
            'length_guidebar'    => $row['length_guidebar'] ?? null,
            'sticker'            => $row['denr_sticker_no'] ?? null,
            'purpose'            => $row['purpose'] ?? null,
            'remarks'            => $row['remarks'] ?? null,
            'client_address'     => $address->address,
            'permit_type'        => 'chainsaw',
            'user_id'            => Auth::id(),
            'chainsaw_parent_id' => $parent->id,
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
