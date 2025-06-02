<?php

namespace App\Imports\Lands;

use App\Models\Address;
use App\Models\Lands\Foreshore;
use App\Models\Lands\ForeshoreParents;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\Importable;

class ForeshoreImport implements ToModel, WithHeadingRow
{
    use Importable;

    protected $requestAddress;
    protected $startTime;

    protected $expectedHeaders = [
        'applicant',
        'location',
        'fla_no',
        'area',
        'remarks_status',
    ];

    public function __construct($address, $startTime)
    {
        $this->requestAddress = $address;
        $this->startTime = $startTime;
    }

    public function headingRow(): int
    {
        return 1;
    }

    public function model(array $row)
    {
        if (!$this->validateHeaders($row)) {
            throw new \Exception('Import cancelled: Excel file headers do not match the expected template.');
        }

        $elapsed = microtime(true) - $this->startTime;
        if ($elapsed >= 55) {
            throw new \Exception('Import cancelled: exceeded time limit. Please reduce the number of rows.');
        }

        $isEmptyRow = empty($row['applicant']) &&
                      empty($row['location']) &&
                      empty($row['fla_no']) &&
                      empty($row['area']) &&
                      empty($row['remarks_status']);

        if ($isEmptyRow) {
            return null;
        }

        $address = Address::firstOrCreate([
            'address' => $this->requestAddress,
            'type' => 'Foreshore',
        ]);

        $parent = ForeshoreParents::firstOrCreate([
            'name'    => $row['applicant'],
            'address' => $address->address,
            'type'    => 'Foreshore',
        ]);

        $foreshore = Foreshore::where([
            ['applicant', '=', $row['applicant']],
            ['location', '=', $row['location']],
            ['fla_no', '=', $row['fla_no']],
            ['area', '=', $row['area']],
            ['remarks_status', '=', $row['remarks_status']],
            ['client_address', '=', $address->address],
            ['lands_type', '=', 'Foreshore'],
        ])->first();

        if ($foreshore) {
            return null;
        }

        return new Foreshore([
            'applicant'       => $row['applicant'] ?? null,
            'location'        => $row['location'] ?? null,
            'fla_no'          => $row['fla_no'] ?? null,
            'area'            => $row['area'] ?? null,
            'remarks_status'  => $row['remarks_status'] ?? null,
            'client_address'  => $address->address,
            'lands_type'      => 'Foreshore',
            'user_id'         => Auth::id(),
            'client_id'       => $parent->id,
        ]);
    }

    protected function validateHeaders(array $row): bool
    {
        $rowKeys = array_map('strtolower', array_keys($row));
        $expected = array_map('strtolower', $this->expectedHeaders);
        sort($rowKeys);
        sort($expected);
        return $rowKeys === $expected;
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
