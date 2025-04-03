<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PermitListSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $permitIds = DB::table('permits')->pluck('id')->toArray();

        $permitTypes = [
            'Tree Cutting',
            'Chainsaw',
            'Lumber Dealer',
            'Supplier',
            'Wildlife',
            'Transport of Finished Product Lumber'
        ];

        $remarksOptions = [
            'Approved',
            'Pending',
            'Rejected'
        ];

        $data = [];

        for ($i = 1; $i <= 50; $i++) {
            $data[] = [
                'permit_id' => $faker->randomElement($permitIds),
                'app_no' => 'APP-' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'name' => $faker->name,
                'subject' => $faker->randomElement($permitTypes),
                'date' => $faker->date('Y-m-d'),
                'document' => $faker->word . '.pdf',
                'permit_type' => $faker->randomElement($permitTypes),
                'user_id' => 1,
                'remarks' => $faker->randomElement($remarksOptions),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('permit_lists')->insert($data);
    }
}
