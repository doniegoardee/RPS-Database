<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TenurialInstrumentSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        $tenurTypes = [
            'CSC',
            'SIFMA',
            'FLAg|FLAgT',
            'FLGMA',
            'SLUP|SAPA',
            'CBFMA'
        ];

        $data = [];

        for ($i = 1; $i <= 50; $i++) {
            $data[] = [
                'tracking_num' => 'TI-' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'subject' => $faker->sentence(3),
                'date' => $faker->date,
                'file' => $faker->word . '.pdf',
                'tenur_type' => $faker->randomElement($tenurTypes),
                'tenur_type_id' => $faker->numberBetween(1, 6),
                'user_id' => 1,
                'remarks' => $faker->randomElement(['Active', 'Expired', 'Pending']),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('tenurial_instruments')->insert($data);
    }
}
