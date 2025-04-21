<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('addresses')->insert([
            [
                'address' => 'Cenro Aparri',
                'type' => 'chainsaw',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Solona',
                'type' => 'chainsaw',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Sanchez Mira',
                'type' => 'chainsaw',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Alcala',
                'type' => 'chainsaw',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Sub Office',
                'type' => 'chainsaw',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'address' => 'Cenro Aparri',
                'type' => 'CSC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Solona',
                'type' => 'CSC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Sanchez Mira',
                'type' => 'CSC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Alcala',
                'type' => 'CSC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Sub Office',
                'type' => 'CSC',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'address' => 'Cenro Aparri',
                'type' => 'SIFMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Solona',
                'type' => 'SIFMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Sanchez Mira',
                'type' => 'SIFMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Alcala',
                'type' => 'SIFMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Sub Office',
                'type' => 'SIFMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'address' => 'Cenro Aparri',
                'type' => 'FLAg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Solona',
                'type' => 'FLAg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Sanchez Mira',
                'type' => 'FLAg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Alcala',
                'type' => 'FLAg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Sub Office',
                'type' => 'FLAg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'address' => 'Cenro Aparri',
                'type' => 'FLAgT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Solona',
                'type' => 'FLAgT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Sanchez Mira',
                'type' => 'FLAgT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Alcala',
                'type' => 'FLAgT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Sub Office',
                'type' => 'FLAgT',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'address' => 'Cenro Aparri',
                'type' => 'FLGMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Solona',
                'type' => 'FLGMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Sanchez Mira',
                'type' => 'FLGMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Alcala',
                'type' => 'FLGMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Sub Office',
                'type' => 'FLGMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'address' => 'Cenro Aparri',
                'type' => 'SLUP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Solona',
                'type' => 'SLUP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Sanchez Mira',
                'type' => 'SLUP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Alcala',
                'type' => 'SLUP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Sub Office',
                'type' => 'SLUP',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'address' => 'Cenro Aparri',
                'type' => 'SAPA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Solona',
                'type' => 'SAPA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Sanchez Mira',
                'type' => 'SAPA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Alcala',
                'type' => 'SAPA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Sub Office',
                'type' => 'SAPA',
                'created_at' => now(),
                'updated_at' => now(),
            ],

             [
                'address' => 'Cenro Aparri',
                'type' => 'CBFMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Solona',
                'type' => 'CBFMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Sanchez Mira',
                'type' => 'CBFMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Cenro Alcala',
                'type' => 'CBFMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Sub Office',
                'type' => 'CBFMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
