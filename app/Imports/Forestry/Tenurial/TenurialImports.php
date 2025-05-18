<?php

namespace App\Imports\Forestry\Tenurial;

use App\Models\Forestry\Tenurial\TenurialInstrument;
use App\Models\Forestry\Tenurial\TIParent;
use App\Models\Forestry\Tenurial\TypeTI;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Carbon\Carbon;
use Exception;

class TenurialImports implements ToModel, WithHeadingRow
{
    protected $address;
    protected $title;

    public function __construct($address, $title)
    {
        $this->address = $address;
        $this->title = $title;
    }

    public function model(array $row)
    {
        $isEmptyRow = empty($row['name_lessee']) &&
                      empty($row['issue_date']) &&
                      empty($row['expired_date']) &&
                      empty($row['tenur_no']) &&
                      empty($row['total_area']) &&
                      empty($row['status']) &&
                      empty($row['remarks']);

        if ($isEmptyRow) {
            return null;
        }

        $nameLessee = $row['name_lessee'] ?? 'Unknown Lessee';

        $tiParent = TIParent::firstOrCreate([
            'name' => $nameLessee,
            'address' => $this->address,
            'type' => $this->title,
        ]);

        $tenurType = TypeTI::firstOrCreate([
            'title' => $this->title,
        ]);

        $issueDate = $this->parseDate($row['issue_date'] ?? null);
        $expiredDate = $this->parseDate($row['expired_date'] ?? null);

        $status = strtolower(trim($row['status'] ?? ''));
        $validStatuses = ['new', 'renewal', 'expired'];
        if (!in_array($status, $validStatuses)) {
            $status = 'NEW';
        } else {
            $status = strtoupper($status);
        }

        return new TenurialInstrument([
            'name_lessee'   => $nameLessee,
            'address'       => $row['address'] ?? $this->address,
            'issue_date'    => $issueDate,
            'expired_date'  => $expiredDate,
            'tenur_no'      => $row['tenur_no'] ?? null,
            'total_area'    => $row['total_area'] ?? null,
            'tenur_type'    => $this->title,
            'tenur_type_id' => $tenurType->id,
            'client_id'     => $tiParent->id,
            'status'        => $status,
            'remarks'       => $row['remarks'] ?? 'No Remarks',
            'user_id'       => Auth::id(),
        ]);
    }

    protected function parseDate($value)
    {
        if (!$value) {
            return null;
        }

        if (is_numeric($value)) {
            return Carbon::instance(Date::excelToDateTimeObject($value))->format('Y-m-d');
        }

        $formats = [
            'Y-m-d',
            'Y/m/d',
            'd-m-Y',
            'd/m/Y',
            'm-d-Y',
            'm/d/Y',
            'Y.m.d',
            'd.m.Y',
            'm.d.Y',
            'F j, Y',
            'j F Y',
            'd M Y',
            'M d, Y',
            'Ymd',
            'dmY',
            'mdY',
            'Y-M-d',
            'd-M-Y',
            'd-M-y',
            'M-d-Y',
            'd M Y',
            'Y M d',
            'YmdHis',
            'd F Y',
            'F d, Y',
            'F j, Y',
            'j F Y',
            'Y-M-d H:i:s',
            'Y-m-d H:i:s',
            'd/m/y',
            'm/d/y',
            'd-m-y',
            'd/m/Y H:i:s',
            'm/d/Y H:i:s',
            'd-m-Y H:i:s',
            'Y.m.d H:i:s',
        ];

        foreach ($formats as $format) {
            try {
                return Carbon::createFromFormat($format, $value)->format('Y-m-d');
            } catch (Exception $e) {
                continue;
            }
        }

        try {
            return Carbon::parse($value)->format('Y-m-d');
        } catch (Exception $e) {
            logger()->warning('Failed to parse date: ' . $value);
            return null;
        }
    }
}
