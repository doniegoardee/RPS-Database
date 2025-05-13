<?php

namespace App\Imports\Tenurial;

use App\Models\TenurialInstrument;
use App\Models\TIParent;
use App\Models\TypeTI;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
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


    protected function parseDate($date)
    {
        if (!$date) {
            return null;
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
        ];

        foreach ($formats as $format) {
            try {
                return Carbon::createFromFormat($format, $date)->format('Y-m-d');
            } catch (Exception $e) {
            }
        }

        try {
            return Carbon::parse($date)->format('Y-m-d');
        } catch (Exception $e) {
            return null;
        }
    }
}
