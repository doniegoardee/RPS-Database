<?php

namespace App\Imports\Forestry\Permits;

use App\Models\Address;
use App\Models\Forestry\Permits\Chainsaw;
use App\Models\Forestry\Permits\ChainsawParent;
use App\Models\Forestry\Permits\TreeCutting;
use App\Models\Forestry\Permits\TreeCuttingParent;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Carbon\Carbon;

class TreeCuttingImport implements ToModel, WithHeadingRow
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
            'type' => 'Tree Cutting',
        ]);

        $parent = TreeCuttingParent::firstOrCreate([
            'name'    => $row['name_permitee'],
            'address' => $address->address,
            'type'    => 'Tree Cutting',
        ]);

        $dateIssuance = $this->parseDate($row['date_issuance']);
        $expirationDate = $this->parseDate($row['expiration_date']);

        $tree_cutting = TreeCutting::where([
            ['name_permitee', '=', $row['name_permitee']],
            ['location', '=', $row['location']],
            ['no_trees', '=', $row['no_trees']],
            ['species', '=', $row['species']],
            ['approved_volume', '=', $row['approved_volume']],
            ['date_issuance', '=', $dateIssuance],
            ['expiration_date', '=', $expirationDate],
            ['seed_requirements', '=', $row['seed_requirements']],
            ['client_address', '=', $address->address],
            ['permit_type', '=', 'Tree Cutting'],
        ])->first();

        if ($tree_cutting) {
            logger()->info('Duplicate row found, skipping import:', $row);
            return null;
        }

        return new TreeCutting([
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
