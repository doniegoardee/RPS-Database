<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenurialInstrumentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tenurial_instruments')->insert([
            [
                'tracking_num' => 'TI-001',
                'subject' => 'Land Lease Agreement',
                'date' => now(),
                'file' => 'lease_agreement.pdf',
                'tenur_type' => 'Lease',
                'tenur_type_id' => 1,
                'user_id' => 1,
                'remarks' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tracking_num' => 'TI-002',
                'subject' => 'Reforestation Permit',
                'date' => now(),
                'file' => 'reforestation_permit.pdf',
                'tenur_type' => 'Reforestation',
                'tenur_type_id' => 2,
                'user_id' => 2,
                'remarks' => 'Expired',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
