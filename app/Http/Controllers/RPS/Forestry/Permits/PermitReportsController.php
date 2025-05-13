<?php

namespace App\Http\Controllers\RPS\Forestry\Permits;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chainsaw;
use Barryvdh\DomPDF\Facade\Pdf;

class PermitReportsController extends Controller
{


    public function all_permits(){

        $grouped = Chainsaw::all()->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.chainsaw.remarks.table.chainsaw-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');


    }

}
