<?php

namespace App\Http\Controllers\AllDocument;

use App\Http\Controllers\Controller;
use App\Models\Forestry\Tenurial\TypeTI;
use Illuminate\Http\Request;

class ChartDocsController extends Controller
{
    public function tenurialChart()
    {
        $types = TypeTI::withCount('TenurialInstrument')->get();

        $labels = $types->pluck('title');
        $counts = $types->pluck('tenurial_instrument_count');

        return response()->json([
            'labels' => $labels,
            'counts' => $counts,
        ]);
    }

    public function index()
    {
        return view('rps-database.chart');
    }
}
