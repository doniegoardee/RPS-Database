<?php

namespace App\Http\Controllers\RPS\Forestry\Tenurial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TenurialInstrument;
use App\Models\TIParent;
use Barryvdh\DomPDF\Facade\Pdf;

class TenurialReportsController extends Controller
{


public function all_tenurial(){

    $grouped = TenurialInstrument::all()->groupBy('tenur_type');

    $pdf = Pdf::loadView('rps-database.documents.all-document-report', compact('grouped'))
              ->setPaper('a4', 'landscape');

              return $pdf->stream('tenurial_report.pdf');


}

public function tenurial_new($id)
{
    $client = TIParent::find($id);


    $tenurial = TenurialInstrument::where('client_id', $id)
                                  ->where('status', 'new')
                                  ->get();

    $pdf = Pdf::loadView('rps-database.forestry.tenurial-instrument.tenurial-doc.status.table.report-generate', compact('client', 'tenurial'))
              ->setPaper('a4', 'landscape');

    return $pdf->stream('TI-Report.pdf');
}



public function tenurial_renewal($id)
{
    $client = TIParent::find($id);


    $tenurial = TenurialInstrument::where('client_id', $id)
                                  ->where('status', 'renewal')
                                  ->get();

    $pdf = Pdf::loadView('rps-database.forestry.tenurial-instrument.tenurial-doc.status.table.report-generate', compact('client', 'tenurial'))
              ->setPaper('a4', 'landscape');

    return $pdf->stream('TI-Report.pdf');
}



public function tenurial_expired($id)
{
    $client = TIParent::find($id);


    $tenurial = TenurialInstrument::where('client_id', $id)
                                  ->where('status', 'expired')
                                  ->get();

    $pdf = Pdf::loadView('rps-database.forestry.tenurial-instrument.tenurial-doc.status.table.report-generate', compact('client', 'tenurial'))
              ->setPaper('a4', 'landscape');

    return $pdf->stream('TI-Report.pdf');
}




}
