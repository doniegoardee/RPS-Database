<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GSUPSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('g_s_u_p_s')->insert([
            [
                'tracking_num' => 'GSUP-001',
                'subject' => 'Forest Permit Approval',
                'document' => 'permit_approval.pdf',
                'file_year' => '2024',
                'remarks' => 'Approved',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tracking_num' => 'GSUP-002',
                'subject' => 'Environmental Clearance',
                'document' => 'env_clearance.pdf',
                'file_year' => '2023',
                'remarks' => 'Pending',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
