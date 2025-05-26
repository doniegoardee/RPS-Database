<?php

namespace App\Http\Controllers\Lands;

use App\Http\Controllers\Controller;
use App\Models\Lands\Lands;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class LandsReportController extends Controller
{




public function generate_report($add,$type){


      $grouped = Lands::where('client_address',$add)
        ->where('lands_type',$type)
        ->get()
        ->groupBy('lands_type');

        $pdf = Pdf::loadView('rps-database.lands.reports.generate-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('lands_report.pdf');

    }


    public function client_report($id,$add){

      $grouped = Lands::where('client_id',$id)
      ->where('client_address', $add)
    ->get()
    ->groupBy('lands_type');

        $pdf = Pdf::loadView('rps-database.lands.reports.client-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('client_report.pdf');

    }



}


