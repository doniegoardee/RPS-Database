<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;

class RPSDocsSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();
        $tenurialTypes = DB::table('type_t_i_s')->pluck('id', 'title');

        $docs = [
            [
                'tracking_num'   => 'TN-001',
                'subject'        => 'Foreshore Lease Application',
                'file'           => 'path/to/file1.pdf',
                'date'           => Carbon::now(),
                'type'           => 'Foreshore',
                'tenur_type_id'  => null,
                'tenur_type'     => null,
                'user_id'        => $user ? $user->id : null,
                'remarks'        => 'Pending approval',
            ],
            [
                'tracking_num'   => 'TN-002',
                'subject'        => 'Tree Cutting Permit',
                'file'           => 'path/to/file2.pdf',
                'date'           => Carbon::now(),
                'type'           => 'Tenurial Instrument',
                'tenur_type_id'  => $tenurialTypes['Tree Cutting'] ?? null,
                'tenur_type'     => 'Tree Cutting',
                'user_id'        => $user ? $user->id : null,
                'remarks'        => 'Approved',
            ],
            [
                'tracking_num'   => 'TN-003',
                'subject'        => 'Protected Area Permit',
                'file'           => 'path/to/file3.pdf',
                'date'           => Carbon::now(),
                'type'           => 'API / PPI',
                'tenur_type_id'  => null,
                'tenur_type'     => null,
                'user_id'        => $user ? $user->id : null,
                'remarks'        => 'In review',
            ],
            [
                'tracking_num'   => 'TN-004',
                'subject'        => 'Special Forest Permit',
                'file'           => 'path/to/file4.pdf',
                'date'           => Carbon::now(),
                'type'           => 'Tenurial Instrument',
                'tenur_type_id'  => $tenurialTypes['FLGMA'] ?? null,
                'tenur_type'     => 'FLGMA',
                'user_id'        => $user ? $user->id : null,
                'remarks'        => 'For verification',
            ],
        ];

        DB::table('r_p_s_docs')->insert($docs);
    }
}
