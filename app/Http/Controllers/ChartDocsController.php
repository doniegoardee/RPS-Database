<?php

namespace App\Http\Controllers;

use App\Models\RPSDocs;
use Illuminate\Http\Request;

class ChartDocsController extends Controller
{


    public function chartData()
{
    $data = [
        'Tenurial Instrument' => RPSDocs::where('type', 'Tenurial Instrument')->count(),
        'Foreshore' => RPSDocs::where('type', 'Foreshore')->count(),
        'API / PPI' => RPSDocs::where('type', 'API / PPI')->count(),
    ];

    return view('rps-database.chart', compact('data'));
}
}
