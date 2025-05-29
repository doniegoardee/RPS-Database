<?php

namespace App\Http\Controllers\Forestry\Permits;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forestry\Permits\Chainsaw;
use App\Models\Forestry\Permits\ChainsawParent;
use App\Models\Forestry\Permits\LumDealer;
use App\Models\Forestry\Permits\Supplier;
use App\Models\Forestry\Permits\TFPL;
use App\Models\Forestry\Permits\TreeCutting;
use App\Models\Forestry\Permits\WildLife;
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


    public function chainsaw_remarks_new($add){

      $grouped = Chainsaw::where('remarks', 'new')
    ->where('client_address',$add)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.chainsaw.report.report-remarks-chainsaw', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }


    public function chainsaw_remarks_renewal($add){

      $grouped = Chainsaw::where('remarks', 'renewal')
    ->where('client_address',$add)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.chainsaw.report.report-remarks-chainsaw', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }


    public function chainsaw_remarks_expired($add){

      $grouped = Chainsaw::where('remarks', 'expired')
    ->where('client_address',$add)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.chainsaw.report.report-remarks-chainsaw', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }



    public function chainsaw_new($id){

      $grouped = Chainsaw::where('remarks', 'new')
      ->where('chainsaw_parent_id',$id)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.chainsaw.report.report-chainsaw', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }



    public function chainsaw_renewal($id){

      $grouped = Chainsaw::where('remarks', 'renewal')
      ->where('chainsaw_parent_id',$id)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.chainsaw.report.report-chainsaw', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }



    public function chainsaw_expired($id){

      $grouped = Chainsaw::where('remarks', 'expired')
      ->where('chainsaw_parent_id',$id)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.chainsaw.report.report-chainsaw', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('permits_report.pdf');

    }



//               TREE CUTTING


    public function treecutting_report($add){

   $grouped = TreeCutting::where('client_address', $add)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.tree-cutting.report.client-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('foreshore_report.pdf');

    }


    public function treecutting_data($id,$add){

      $grouped = TreeCutting::where('cutting_parent_id',$id)
      ->where('client_address', $add)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.tree-cutting.report.data-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('client_report.pdf');

    }


    public function lumberdealer_report($add){

   $grouped = LumDealer::where('client_address', $add)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-dealer.reports.client-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('foreshore_report.pdf');

    }


    public function lumberdealer_data($id,$add){

      $grouped = LumDealer::where('dealer_parent_id',$id)
      ->where('client_address', $add)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-dealer.reports.data-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('client_report.pdf');

    }


    public function lumbersupplier_report($add){

   $grouped = Supplier::where('client_address', $add)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-supplier.reports.client-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('foreshore_report.pdf');

    }


    public function lumbersupplier_data($id,$add){

      $grouped = Supplier::where('supplier_parent_id',$id)
      ->where('client_address', $add)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.lumber-supplier.reports.data-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('client_report.pdf');

    }


    public function tfpl_report($add){

   $grouped = TFPL::where('client_address', $add)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.tfpl.report.client-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('foreshore_report.pdf');

    }


    public function tfpl_data($id,$add){

      $grouped = TFPL::where('tfpl_parent_id',$id)
      ->where('client_address', $add)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.tfpl.report.data-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('client_report.pdf');

    }


    public function wildlife_report($add){

   $grouped = WildLife::where('client_address', $add)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.wildlife.report.client-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('foreshore_report.pdf');

    }


    public function wildlife_data($id,$add){

      $grouped = WildLife::where('wildlife_parent_id',$id)
      ->where('client_address', $add)
    ->get()
    ->groupBy('permit_type');

        $pdf = Pdf::loadView('rps-database.forestry.permits.wildlife.report.data-report', compact('grouped'))
                  ->setPaper('a4', 'landscape');

                  return $pdf->stream('client_report.pdf');

    }

}
