<?php

namespace App\Imports\Lands;

use App\Models\Address;
use App\Models\Lands\Lands;
use App\Models\Lands\LandsParents;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\ValidationException;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Carbon\Carbon;

class LandsImportData implements ToModel, WithHeadingRow
{
    protected $requestAddress;
    protected $lands_type;
    protected $startTime;

    protected $expectedHeaders = [
        'applicant', 'applicant_no', 'lot_no', 'area', 'location', 'dpli_mi_si'
    ];

    public function __construct($address, $lands_type, $startTime)
    {
        $this->requestAddress = $address;
        $this->lands_type = $lands_type;
        $this->startTime = $startTime;
    }

    public function headingRow(): int
    {
        return 1;
    }

    public function prepareForValidation($data, $index)
    {
        return $data;
    }

    public function model(array $row)
    {
        if ($this->headersMismatch($row)) {
            throw new \Exception('Import cancelled: Excel file headers do not match the expected template.');
        }

        $elapsed = microtime(true) - $this->startTime;
        if ($elapsed >= 55) {
            throw new \Exception('Import cancelled: exceeded time limit. Please reduce the number of rows.');
        }

        $isEmptyRow = empty($row['applicant']) &&
                      empty($row['applicant_no']) &&
                      empty($row['lot_no']) &&
                      empty($row['area']) &&
                      empty($row['location']) &&
                      empty($row['dpli_mi_si']);

        if ($isEmptyRow) {
            return null;
        }

        $address = Address::firstOrCreate([
            'address' => $this->requestAddress,
            'type' => $this->lands_type,
        ]);

        $parent = LandsParents::firstOrCreate([
            'name'    => $row['applicant'],
            'address' => $address->address,
            'type'    => $this->lands_type,
        ]);

        $existingLands = Lands::where([
            ['applicant', '=', $row['applicant']],
            ['applicant_no', '=', $row['applicant_no']],
            ['lot_no', '=', $row['lot_no']],
            ['area', '=', $row['area']],
            ['location', '=', $row['location']],
            ['dpli_mi_si', '=', $row['dpli_mi_si']],
            ['client_address', '=', $address->address],
            ['lands_type', '=', $this->lands_type],
        ])->first();

        if ($existingLands) {
            return null;
        }

        return new Lands([
            'applicant'      => $row['applicant'] ?? null,
            'applicant_no'   => $row['applicant_no'] ?? null,
            'lot_no'         => $row['lot_no'] ?? null,
            'area'           => $row['area'] ?? null,
            'location'       => $row['location'] ?? null,
            'dpli_mi_si'     => $row['dpli_mi_si'] ?? null,
            'client_address' => $address->address,
            'lands_type'     => $this->lands_type,
            'user_id'        => Auth::id(),
            'client_id'      => $parent->id,
        ]);
    }

    protected function headersMismatch(array $row): bool
    {
        $rowKeys = array_map('strtolower', array_keys($row));
        sort($rowKeys);
        $expected = $this->expectedHeaders;
        sort($expected);
        return $rowKeys !== $expected;
    }

    protected function parseDate($value)
    {
        if (is_numeric($value)) {
            return Carbon::instance(Date::excelToDateTimeObject($value))->format('Y-m-d');
        }

        $formats = [
            'Y-m-d', 'Y/m/d', 'm-d-Y', 'm/d/Y', 'd-m-Y', 'd/m/Y',
            'Ymd', 'dmY', 'mdY', 'M d, Y', 'd M Y', 'Y M d',
            'F d, Y', 'd F Y', 'F j, Y', 'j F Y',
            'd-M-Y', 'd-M-y', 'Y-M-d', 'Y-M-d H:i:s', 'Y-m-d H:i:s',
            'd/m/y', 'm/d/y', 'd-m-y', 'Y.m.d', 'YmdHis'
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
            return null;
        }
    }
}
