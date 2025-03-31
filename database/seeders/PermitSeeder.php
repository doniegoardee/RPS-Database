<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permits')->insert([

            [
                'permit_title' => 'Tree Cutting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'permit_title' => 'Chainsaw',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'permit_title' => 'Lumber Dealer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'permit_title' => 'Supplier',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'permit_title' => 'Wildlife',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'permit_title' => 'Transport of Finished Product Lumber',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
