<?php

namespace App\Imports\Forestry\Permits;

use App\Models\Address;
use App\Models\Forestry\Permits\TreeCutting;
use App\Models\Forestry\Permits\TreeCuttingParent;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Carbon\Carbon;

class TreeCuttingImport implements ToCollection, WithHeadingRow
{
    protected $requestAddress;
    protected $startTime;

    public function __construct($address,$startTime)
    {
        $this->requestAddress = $address;
        $this->startTime = $startTime;


    }

    public function collection(Collection $rows)
    {

                 $elapsed = microtime(true) - $this->startTime;
        if ($elapsed >= 55) {
            throw new \Exception('Import cancelled: exceeded time limit. Please reduce the number of rows.');
        }


        $address = Address::firstOrCreate([
            'address' => $this->requestAddress,
            'type' => 'Tree Cutting',
        ]);

        $batch = [];
        $existing = TreeCutting::whereIn('name_permitee', $rows->pluck('name_permitee')->toArray())->get();

        foreach ($rows as $row) {
            // Skip if row is empty
            if (collect($row)->filter()->isEmpty()) continue;

            $dateIssuance = $this->parseDate($row['date_issuance'] ?? null);
            $expirationDate = $this->parseDate($row['expiration_date'] ?? null);

            $isDuplicate = $existing->contains(function ($record) use ($row, $dateIssuance, $expirationDate, $address) {
                return
                    $record->name_permitee === ($row['name_permitee'] ?? null) &&
                    $record->location === ($row['location'] ?? null) &&
                    $record->no_trees == ($row['no_trees'] ?? null) &&
                    $record->species === ($row['species'] ?? null) &&
                    $record->approved_volume == ($row['approved_volume'] ?? null) &&
                    $record->date_issuance === $dateIssuance &&
                    $record->expiration_date === $expirationDate &&
                    $record->seed_requirements === ($row['seed_requirements'] ?? null) &&
                    $record->client_address === $address->address;
            });

            if ($isDuplicate) {
                logger()->info('Duplicate row skipped:', $row->toArray());
                continue;
            }

            $parent = TreeCuttingParent::firstOrCreate([
                'name'    => $row['name_permitee'] ?? null,
                'address' => $address->address,
                'type'    => 'Tree Cutting',
            ]);

            $batch[] = [
                'name_permitee'      => $row['name_permitee'] ?? null,
                'location'           => $row['location'] ?? null,
                'no_trees'           => $row['no_trees'] ?? null,
                'species'            => $row['species'] ?? null,
                'approved_volume'    => $row['approved_volume'] ?? null,
                'date_issuance'      => $dateIssuance,
                'expiration_date'    => $expirationDate,
                'seed_requirements'  => $row['seed_requirements'] ?? null,
                'client_address'     => $address->address,
                'permit_type'        => 'Tree Cutting',
                'user_id'            => Auth::id(),
                'cutting_parent_id'  => $parent->id,
                'created_at'         => now(),
                'updated_at'         => now(),
            ];
        }

        foreach (array_chunk($batch, 500) as $chunk) {
            TreeCutting::insert($chunk);
        }
    }

    protected function parseDate($value)
    {
        if (empty($value)) return null;

        try {
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

            return Carbon::parse($value)->format('Y-m-d');
        } catch (\Exception $e) {
            logger()->warning('Failed to parse date: ' . $value);
            return null;
        }
    }
}
