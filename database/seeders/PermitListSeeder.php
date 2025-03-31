<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermitListSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('permit_lists')->insert([
            [
                'permit_id' => 1,
                'app_no' => 'APP-001',
                'name' => 'John Doe',
                'subject' => 'Forest Use Permit',
                'date' => '2024-03-30',
                'document' => 'forest_use_permit.pdf',
                'permit_type' => 'Forest',
                'user_id' => 1,
                'remarks' => 'Approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'permit_id' => 2,
                'app_no' => 'APP-002',
                'name' => 'Jane Smith',
                'subject' => 'Mining Permit',
                'date' => '2023-11-15',
                'document' => 'mining_permit.pdf',
                'permit_type' => 'Mining',
                'user_id' => 2,
                'remarks' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
