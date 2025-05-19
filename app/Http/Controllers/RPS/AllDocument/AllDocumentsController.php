<?php

namespace App\Http\Controllers\RPS\AllDocument;

use App\Http\Controllers\Controller;
use App\Models\Forestry\Permits\Chainsaw;
use App\Models\Forestry\Permits\LumDealer;
use App\Models\Forestry\Tenurial\TenurialInstrument;
use Illuminate\Http\Request;

class AllDocumentsController extends Controller
{


public function index()
{
    // Tenurial Instruments
    $tenurial = TenurialInstrument::all()->map(function ($item) {
        return [
            'id' => $item->id,
            'name_lessee' => $item->name_lessee,
            'address' => $item->address,
            'issue_date' => $item->issue_date,
            'expired_date' => $item->expired_date,
            'tenur_no' => $item->tenur_no,
            'total_area' => $item->total_area,
            'tenur_type' => $item->tenur_type,
            'status' => $item->status,
            'remarks' => $item->remarks,
            'document' => $item->document,
        ];
    });

    $permitList = Chainsaw::all()->map(function ($item) {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'address' => $item->address,
            'brand' => $item->brand,
            'serial_num' => $item->serial_num,
            'date_registered' => $item->date_registered,
            'date_expiry' => $item->date_expiry,
            'control_no' => $item->control_no,
            'date_acquired' => $item->date_acquired,
            'horse_power' => $item->horse_power,
            'length_guidebar' => $item->length_guidebar,
            'sticker' => $item->sticker,
            'purpose' => $item->purpose,
            'remarks' => $item->remarks,
            'document' => $item->document,
            'permit_type' => $item->permit_type,
        ];
    });

    $lumberList = LumDealer::all()->map(function ($item) {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'address' => $item->address,
            'license_no' => $item->license_no,
            'date_issued' => $item->date_issued,
            'date_expiry' => $item->date_expiry,
            'status' => $item->status,
            'remarks' => $item->remarks,
            'document' => $item->document,
            'permit_type' => $item->permit_type,
        ];
    });

    $permitList = $permitList->merge($lumberList);

    return view('rps-database.documents.all-doc', compact('tenurial', 'permitList'));
}



    public function view_tenurial($id){

        $view = TenurialInstrument::where('id',$id)->get();


        return view('rps-database.documents.view-document',compact('view'));

    }

}
