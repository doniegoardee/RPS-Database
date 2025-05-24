<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TIseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('type_t_i_s')->insert([
            [
                'title' => 'CSC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SIFMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'FLAg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'FLAgT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'FLGMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SLUP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SAPA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'CBFMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'GSUP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
