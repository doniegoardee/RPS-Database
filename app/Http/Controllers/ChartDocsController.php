<?php

namespace App\Http\Controllers;

use App\Models\GSUP;
use App\Models\PermitList;
use App\Models\TenurialInstrument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartDocsController extends Controller
{


    public function chartData()
    {
        $tenurialData = DB::table('tenurial_instruments')
            ->select('tenur_type', DB::raw('count(*) as count'))
            ->groupBy('tenur_type')
            ->pluck('count', 'tenur_type');

        $permitData = DB::table('permit_lists')
            ->select('permit_type', DB::raw('count(*) as count'))
            ->groupBy('permit_type')
            ->pluck('count', 'permit_type');

        $gsupCount = DB::table('g_s_u_p_s')->count();

        return view('rps-database.chart', compact('tenurialData', 'permitData', 'gsupCount'));
    }


}
