<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RPSDocsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $treeCuttingId = DB::table('type_t_i_s')->where('title', 'Tree Cutting')->value('id');
        $sifmaId = DB::table('type_t_i_s')->where('title', 'SIFMA')->value('id');
        $gsupId = DB::table('type_t_i_s')->where('title', 'GSUP')->value('id');

        DB::table('r_p_s_docs')->insert([
            [
                'tracking_num' => 'TRK-001',
                'subject' => 'Land Tenure Document',
                'date' => now(),
                'file' => 'document1.pdf',
                'type' => 'Tenurial Instrument',
                'tenur_type_id' => $treeCuttingId,
                'remarks' => 'Approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tracking_num' => 'TRK-002',
                'subject' => 'Foreshore Lease Application',
                'date' => now(),
                'file' => 'document2.pdf',
                'type' => 'Foreshore',
                'tenur_type_id' => null,
                'remarks' => 'Pending Review',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tracking_num' => 'TRK-003',
                'subject' => 'API Processing',
                'date' => now(),
                'file' => 'document3.pdf',
                'type' => 'API / PPI',
                'tenur_type_id' => null,
                'remarks' => 'Under Processing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
