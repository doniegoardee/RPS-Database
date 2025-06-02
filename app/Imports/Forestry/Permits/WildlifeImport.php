<?php

namespace App\Imports\Forestry\Permits;

use App\Models\Address;
use App\Models\Forestry\Permits\WildLife;
use App\Models\Forestry\Permits\WildLifeParent;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class WildlifeImport implements ToCollection, WithHeadingRow
{
    protected $requestAddress;
    protected $startTime;
    protected $requiredHeaders = [
        'name',
        'address',
        'species_name',
        'quantity',
        'unit_measure',
        'fee',
        'origin',
        'description',
        'purpose',
        'destination',
        'permit_no',
        'date_issuance',
        'date_expiry',
    ];

    public function __construct($address, $startTime)
    {
        $this->requestAddress = $address;
        $this->startTime = $startTime;
    }

    public function collection(Collection $rows)
    {
        if ($rows->isEmpty()) {
            throw new \Exception('No data found in the file.');
        }

        $headers = array_keys($rows->first()->toArray());

        $missingHeaders = array_diff($this->requiredHeaders, $headers);
        if (!empty($missingHeaders)) {
            throw new \Exception('Import cancelled: Excel file headers do not match the expected template');
        }

        $elapsed = microtime(true) - $this->startTime;
        if ($elapsed >= 55) {
            throw new \Exception('Import cancelled: exceeded time limit. Please reduce the number of rows.');
        }

        $address = Address::firstOrCreate([
            'address' => $this->requestAddress,
            'type' => 'wildlife',
        ]);

        $batch = [];
        $existingPermitNos = WildLife::whereIn('permit_no', $rows->pluck('permit_no')->toArray())
                            ->pluck('permit_no')->toArray();

        foreach ($rows as $row) {
            if (collect($row)->filter()->isEmpty()) {
                continue;
            }

            if (!empty($row['permit_no']) && in_array($row['permit_no'], $existingPermitNos)) {
                continue;
            }

            $parent = WildLifeParent::firstOrCreate([
                'name' => $row['name'] ?? null,
                'address' => $address->address,
                'type' => 'wildlife',
            ]);

            $dateIssuance = $this->parseDate($row['date_issuance'] ?? null);
            $dateExpiry = $this->parseDate($row['date_expiry'] ?? null);

            $batch[] = [
                'name' => $row['name'] ?? null,
                'address' => $row['address'] ?? null,
                'species_name' => $row['species_name'] ?? null,
                'quantity' => $row['quantity'] ?? null,
                'unit_measure' => $row['unit_measure'] ?? null,
                'fee' => $row['fee'] ?? null,
                'origin' => $row['origin'] ?? null,
                'description' => $row['description'] ?? null,
                'purpose' => $row['purpose'] ?? null,
                'destination' => $row['destination'] ?? null,
                'permit_no' => $row['permit_no'] ?? null,
                'date_issuance' => $dateIssuance,
                'date_expiry' => $dateExpiry,
                'client_address' => $address->address,
                'permit_type' => 'Wildlife',
                'user_id' => Auth::id(),
                'wildlife_parent_id' => $parent->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        foreach (array_chunk($batch, 500) as $chunk) {
            WildLife::insert($chunk);
        }
    }

    protected function parseDate($value)
    {
        if (empty($value)) {
            return null;
        }

        try {
            if (is_numeric($value)) {
                return Carbon::instance(Date::excelToDateTimeObject($value))->format('Y-m-d');
            }

            return Carbon::parse($value)->format('Y-m-d');
        } catch (\Exception $e) {
            logger()->warning('Invalid date format: ' . $value);
            return null;
        }
    }
}
