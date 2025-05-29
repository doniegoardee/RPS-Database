<?php

namespace App\Http\Controllers\AllDocument;

use App\Http\Controllers\Controller;
use App\Models\Forestry\Tenurial\TypeTI;
use App\Models\Forestry\Permits\Chainsaw;
use App\Models\Forestry\Permits\LumDealer;
use App\Models\Forestry\Permits\Supplier;
use App\Models\Forestry\Permits\TFPL;
use App\Models\Forestry\Permits\Wildlife;
use App\Models\Forestry\Permits\TreeCutting;
use App\Models\Lands\Lands;
use App\Models\Lands\Foreshore;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class ChartDocsController extends Controller
{
    public function tenurialChart(): JsonResponse
    {
        $types = TypeTI::withCount('TenurialInstrument')->get();

        $labels = $types->pluck('title');
        $counts = $types->pluck('tenurial_instrument_count');

        return response()->json([
            'labels' => $labels,
            'counts' => $counts,
        ]);
    }

    public function permitChart(): JsonResponse
    {
        return response()->json([
            'labels' => ['Chainsaw', 'Lumber Dealer', 'Supplier', 'TFPL', 'Wildlife', 'Tree Cutting'],
            'counts' => [
                Chainsaw::count(),
                LumDealer::count(),
                Supplier::count(),
                TFPL::count(),
                Wildlife::count(),
                TreeCutting::count()
            ]
        ]);
    }

    public function landsTypeData(): JsonResponse
    {
        // Query Lands table
        $landsData = Lands::select('lands_type', DB::raw('count(*) as total'))
            ->groupBy('lands_type')
            ->get();

        // Query Foreshore table
        $foreshoreData = Foreshore::select('lands_type', DB::raw('count(*) as total'))
            ->groupBy('lands_type')
            ->get();

        // Merge and sum duplicates
        $combined = $landsData->concat($foreshoreData)
            ->groupBy('lands_type')
            ->map(function (Collection $group) {
                return $group->sum('total');
            });

        return response()->json([
            'labels' => $combined->keys()->values(),
            'counts' => $combined->values(),
        ]);
    }

    public function index()
    {
        return view('rps-database.chart');
    }
}
