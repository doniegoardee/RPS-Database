<?php

namespace App\Http\Controllers\Forestry\Tenurial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forestry\Tenurial\TenurialInstrument;
use App\Models\Forestry\Tenurial\TIParent;
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

    $pdf = Pdf::loadView('rps-database.forestry.tenurial-instrument.report.report-generate', compact('client', 'tenurial'))
              ->setPaper('a4', 'landscape');

    return $pdf->stream('TI-Report.pdf');
}


public function tenurial_existing($id)
{
    $client = TIParent::find($id);


    $tenurial = TenurialInstrument::where('client_id', $id)
                                  ->where('status', 'existing')
                                  ->get();

    $pdf = Pdf::loadView('rps-database.forestry.tenurial-instrument.report.report-generate', compact('client', 'tenurial'))
              ->setPaper('a4', 'landscape');

    return $pdf->stream('TI-Report.pdf');
}


public function tenurial_renewal($id)
{
    $client = TIParent::find($id);


    $tenurial = TenurialInstrument::where('client_id', $id)
                                  ->where('status', 'renewal')
                                  ->get();

    $pdf = Pdf::loadView('rps-database.forestry.tenurial-instrument.report.report-generate', compact('client', 'tenurial'))
              ->setPaper('a4', 'landscape');

    return $pdf->stream('TI-Report.pdf');
}



public function tenurial_expired($id)
{
    $client = TIParent::find($id);


    $tenurial = TenurialInstrument::where('client_id', $id)
                                  ->where('status', 'expired')
                                  ->get();

    $pdf = Pdf::loadView('rps-database.forestry.tenurial-instrument.report.report-generate', compact('client', 'tenurial'))
              ->setPaper('a4', 'landscape');

    return $pdf->stream('TI-Report.pdf');
}


public function tenurial_cancelled($id)
{
    $client = TIParent::find($id);


    $tenurial = TenurialInstrument::where('client_id', $id)
                                  ->where('status', 'cancelled')
                                  ->get();

    $pdf = Pdf::loadView('rps-database.forestry.tenurial-instrument.report.report-generate', compact('client', 'tenurial'))
              ->setPaper('a4', 'landscape');

    return $pdf->stream('TI-Report.pdf');
}


public function status_new($add, $type)
{
    $tenurial = TenurialInstrument::with('tenurType')
        ->where('status', 'new')
        ->where('client_address', $add)
        ->where('tenur_type', $type)
        ->get()
        ->groupBy('tenur_type');

    $pdf = Pdf::loadView('rps-database.forestry.tenurial-instrument.report.status-report', compact('tenurial'))
            ->setPaper('a4', 'landscape');

    return $pdf->stream('TI-Report.pdf');
}


public function status_renewal($add, $type)
{
    $tenurial = TenurialInstrument::with('tenurType')
        ->where('status', 'renewal')
        ->where('client_address', $add)
        ->where('tenur_type', $type)
        ->get()
        ->groupBy('tenur_type');

    $pdf = Pdf::loadView('rps-database.forestry.tenurial-instrument.report.status-report', compact('tenurial'))
            ->setPaper('a4', 'landscape');

    return $pdf->stream('TI-Report.pdf');
}


public function status_existing($add, $type)
{
    $tenurial = TenurialInstrument::with('tenurType')
        ->where('status', 'existing')
        ->where('client_address', $add)
        ->where('tenur_type', $type)
        ->get()
        ->groupBy('tenur_type');

    $pdf = Pdf::loadView('rps-database.forestry.tenurial-instrument.report.status-report', compact('tenurial'))
            ->setPaper('a4', 'landscape');

    return $pdf->stream('TI-Report.pdf');
}


public function status_expired($add, $type)
{
    $tenurial = TenurialInstrument::with('tenurType')
        ->where('status', 'expired')
        ->where('client_address', $add)
        ->where('tenur_type', $type)
        ->get()
        ->groupBy('tenur_type');

    $pdf = Pdf::loadView('rps-database.forestry.tenurial-instrument.report.status-report', compact('tenurial'))
            ->setPaper('a4', 'landscape');

    return $pdf->stream('TI-Report.pdf');
}


public function status_cancelled($add, $type)
{
    $tenurial = TenurialInstrument::with('tenurType')
        ->where('status', 'cancelled')
        ->where('client_address', $add)
        ->where('tenur_type', $type)
        ->get()
        ->groupBy('tenur_type');

    $pdf = Pdf::loadView('rps-database.forestry.tenurial-instrument.report.status-report', compact('tenurial'))
            ->setPaper('a4', 'landscape');

    return $pdf->stream('TI-Report.pdf');
}

}
