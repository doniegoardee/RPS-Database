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
        ]);
    }
}
