<?php

namespace App\Imports\Forestry;

use App\Models\Address;
use App\Models\Chainsaw;
use App\Models\ChainsawParent;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ChainsawImport implements ToModel, WithHeadingRow
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
            'type' => 'chainsaw',
        ]);

        $parent = ChainsawParent::firstOrCreate([
            'name'    => $row['name'],
            'address' => $address->address,
            'type'    => 'chainsaw',
        ]);

        $existingChainsaw = Chainsaw::where([
            ['name', '=', $row['name']],
            ['address', '=', $row['address']],
            ['brand', '=', $row['brand']],
            ['serial_num', '=', $row['serial_number']],
            ['date_registered', '=', $row['date_registered_or_renewal']],
            ['date_expiry', '=', $row['date_expiry']],
            ['control_no', '=', $row['control_no']],
            ['date_acquired', '=', $row['date_acquired']],
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

        } else {
            return new Chainsaw([
                'name'               => $row['name'] ?? null,
                'address'            => $row['address'] ?? null,
                'brand'              => $row['brand'] ?? null,
                'serial_num'         => $row['serial_number'] ?? null,
                'date_registered'    => $row['date_registered_or_renewal'] ?? null,
                'date_expiry'        => $row['date_expiry'] ?? null,
                'control_no'         => $row['control_no'] ?? null,
                'date_acquired'      => $row['date_acquired'] ?? null,
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
    }
}
