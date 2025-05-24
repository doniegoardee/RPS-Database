<?php

namespace App\Http\Controllers\RPS\Lands;

use App\Http\Controllers\Controller;
use App\Models\Lands\Lands;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class LandsReportController extends Controller
{


public function status_new(){

      $grouped = Lands::where('remarks', 'new')
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-dealer.reports.lumber-dealer-remarks-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');


    }


    public function status_existing(){

      $grouped = Lands::where('remarks', 'renewal')
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-dealer.reports.lumber-dealer-remarks-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }


    public function status_expired(){

      $grouped = Lands::where('remarks', 'expired')
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-dealer.reports.lumber-dealer-remarks-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }

     public function status_cancelled(){

      $grouped = Lands::where('remarks', 'expired')
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-dealer.reports.lumber-dealer-remarks-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }





}
