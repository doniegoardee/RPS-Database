<?php

namespace App\Imports\Forestry\Permits;

use App\Models\Address;
use App\Models\Forestry\Permits\TFPL;
use App\Models\Forestry\Permits\TFPLParent;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Carbon\Carbon;

class TFPLImport implements ToModel, WithHeadingRow
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
            'type' => 'TFPL',
        ]);

        $parent = TFPLParent::firstOrCreate([
            'name'    => $row['name_permitee'],
            'address' => $address->address,
            'type'    => 'TFPL',
        ]);

        $dateTransport = $this->parseDate($row['date_transport']);

        $tfpl = TFPL::where([
            ['name_permitee', '=', $row['name_permitee']],
            ['place_of_loading', '=', $row['place_of_loading']],
            ['destination', '=', $row['destination']],
            ['species', '=', $row['species']],
            ['permit_no', '=', $row['permit_no']],
            ['volume_to_transport', '=', $row['volume_to_transport']],
            ['no_finish_product', '=', $row['no_finish_product']],
            ['no_finish_lumber', '=', $row['no_finish_lumber']],
            ['date_transport', '=', $dateTransport],
            ['cert_and_oath', '=', $row['cert_and_oath']],
            ['inspection', '=', $row['inspection']],
            ['remarks', '=', $row['remarks']],
            ['client_address', '=', $address->address],
            ['permit_type', '=', 'TFPL'],
        ])->first();

        if ($tfpl) {
            logger()->info('Duplicate row found, skipping import:', $row);
            return null;
        }

        return new TFPL([
            'name_permitee'         => $row['name_permitee'] ?? null,
            'place_of_loading'      => $row['place_of_loading'] ?? null,
            'destination'           => $row['destination'] ?? null,
            'species'               => $row['species'] ?? null,
            'permit_no'             => $row['permit_no'] ?? null,
            'volume_to_transport'   => $row['volume_to_transport'] ?? null,
            'no_finish_product'     => $row['no_finish_product'] ?? null,
            'no_finish_lumber'      => $row['no_finish_lumber'] ?? null,
            'date_transport'        => $dateTransport ?? null,
            'cert_and_oath'         => $row['cert_and_oath'] ?? null,
            'inspection'            => $row['inspection'] ?? null,
            'remarks'               => $row['remarks'] ?? null,
            'client_address'        => $address->address,
            'permit_type'           => 'TFPL',
            'user_id'               => Auth::id(),
            'tfpl_parent_id'        => $parent->id,
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
