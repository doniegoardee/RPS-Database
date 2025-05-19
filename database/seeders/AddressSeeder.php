<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['chainsaw', 'CSC', 'SIFMA', 'FLAg', 'FLAgT', 'FLGMA', 'SLUP', 'SAPA', 'CBFMA', 'Tree Cutting',
         'Lumber Dealer', 'Lumber Supplier','Wildlife','TFPL','Foreshore','SP','FPA','RFPA'];
        $addresses = ['Cenro Aparri', 'Cenro Solana', 'Cenro Sanchez Mira', 'Cenro Alcala', 'Sub Office'];

        $data = [];

        foreach ($types as $type) {
            foreach ($addresses as $address) {
                $data[] = [
                    'address' => $address,
                    'type' => $type,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('addresses')->insert($data);
    }
}
