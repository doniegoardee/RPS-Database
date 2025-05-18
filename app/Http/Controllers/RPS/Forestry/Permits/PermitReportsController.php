<?php

namespace App\Http\Controllers\RPS\Forestry\Permits;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forestry\Permits\Chainsaw;
use App\Models\Forestry\Permits\ChainsawParent;
use App\Models\Forestry\Permits\LumDealer;
use Barryvdh\DomPDF\Facade\Pdf;

class PermitReportsController extends Controller
{


    public function all_permits(){

        $grouped = Chainsaw::all()->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.documents.all-permit-reports', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');


    }

    //           CHAINSAW


    public function chainsaw_remarks_new(){

      $grouped = Chainsaw::where('remarks', 'new')
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.chainsaw.remarks.report.report-remarks-chainsaw', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }


    public function chainsaw_remarks_renewal(){

      $grouped = Chainsaw::where('remarks', 'renewal')
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.chainsaw.remarks.report.report-remarks-chainsaw', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }


    public function chainsaw_remarks_expired(){

      $grouped = Chainsaw::where('remarks', 'expired')
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.chainsaw.remarks.report.report-remarks-chainsaw', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }



    public function chainsaw_new($id){

      $grouped = Chainsaw::where('remarks', 'new')
      ->where('chainsaw_parent_id',$id)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.chainsaw.remarks.report.report-chainsaw', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }



    public function chainsaw_renewal($id){

      $grouped = Chainsaw::where('remarks', 'renewal')
      ->where('chainsaw_parent_id',$id)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.chainsaw.remarks.report.report-chainsaw', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }



    public function chainsaw_expired($id){

      $grouped = Chainsaw::where('remarks', 'expired')
      ->where('chainsaw_parent_id',$id)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.chainsaw.remarks.report.report-chainsaw', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }



//               LUMBER DEALER


public function lumber_dealer_remarks_new(){

      $grouped = LumDealer::where('remarks', 'new')
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-dealer.reports.lumber-dealer-remarks-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');


    }


    public function Lumber_dealer_remarks_renewal(){

      $grouped = LumDealer::where('remarks', 'renewal')
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-dealer.reports.lumber-dealer-remarks-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }


    public function lumber_dealer_remarks_expired(){

      $grouped = LumDealer::where('remarks', 'expired')
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-dealer.reports.lumber-dealer-remarks-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }



    public function lumber_dealer_new($id){

        $grouped = LumDealer::where('remarks', 'new')
        ->where('dealer_parent_id',$id)
        ->get()
        ->groupBy('permit_type');

            $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-dealer.reports.lumber-dealer-report', compact('grouped'))
                    ->setPaper('a4', 'landscape');

                    return $pdf->stream('permits_report.pdf');

    }



    public function lumber_dealer_renewal($id){

            $grouped = LumDealer::where('remarks', 'renewal')
            ->where('dealer_parent_id',$id)
            ->get()
            ->groupBy('permit_type');

                $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-dealer.reports.lumber-dealer-report', compact('grouped'))
                        ->setPaper('a4', 'landscape');

                        return $pdf->stream('permits_report.pdf');

        }



    public function lumber_dealer_expired($id){

            $grouped = LumDealer::where('remarks', 'expired')
            ->where('dealer_parent_id',$id)
            ->get()
            ->groupBy('permit_type');

                $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-dealer.reports.lumber-dealer-report', compact('grouped'))
                        ->setPaper('a4', 'landscape');

                        return $pdf->stream('permits_report.pdf');

        }



}
