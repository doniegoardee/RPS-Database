<?php

namespace App\Http\Controllers\AllDocument;

use App\Http\Controllers\Controller;
use App\Models\Forestry\Permits\Chainsaw;
use App\Models\Forestry\Permits\LumDealer;
use App\Models\Forestry\Permits\Supplier;
use App\Models\Forestry\Permits\TFPL;
use App\Models\Forestry\Permits\TreeCutting;
use App\Models\Forestry\Permits\WildLife;
use App\Models\Forestry\Tenurial\TenurialInstrument;
use App\Models\Lands\Foreshore;
use App\Models\Lands\Lands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllDocumentsController extends Controller
{


public function index()
{
    $data = collect();

    $data = $data->merge(
        TenurialInstrument::select(
            'id',
            DB::raw("'Tenurial Instrument' as type"),
            'name_lessee as name',
            'address as location',
            DB::raw("NULL as permit_type"),
            'document'
        )->get()
    );

    $data = $data->merge(
        Chainsaw::select(
            'id',
            DB::raw("'Chainsaw' as type"),
            'name',
            'address as location',
            'permit_type',
            'document'
        )->get()
    );

    $data = $data->merge(
        TreeCutting::select(
            'id',
            DB::raw("'Tree Cutting' as type"),
            'name_permitee as name',
            'location',
            'permit_type',
            'document'
        )->get()
    );

    $data = $data->merge(
        LumDealer::select(
            'id',
            DB::raw("'Lumber Dealer' as type"),
            'name',
            'location',
            'permit_type',
            'document'
        )->get()
    );

    $data = $data->merge(
        Supplier::select(
            'id',
            DB::raw("'Supplier' as type"),
            'name',
            'location',
            'permit_type',
            'document'
        )->get()
    );

    $data = $data->merge(
        TFPL::select(
            'id',
            DB::raw("'TFPL' as type"),
            'name_permitee as name',
            'place_of_loading as location',
            'permit_type',
            'document'
        )->get()
    );

    $data = $data->merge(
        WildLife::select(
            'id',
            DB::raw("'Wildlife' as type"),
            'name',
            'address as location',
            'permit_type',
            'document'
        )->get()
    );

    $data = $data->merge(
        Lands::select(
            'id',
            DB::raw("'Lands' as type"),
            'applicant as name',
            'location',
            'lands_type as permit_type',
            'document'
        )->get()
    );

    $data = $data->merge(
        Foreshore::select(
            'id',
            DB::raw("'Foreshore' as type"),
            'applicant as name',
            'location',
            'lands_type as permit_type',
            'document'
        )->get()
    );

    return view('rps-database.documents.all-doc', compact('data'));
}




public function viewDocument($type, $id)
{
    $modelMap = [
        'tenurial-instrument' => TenurialInstrument::class,
        'chainsaw' => Chainsaw::class,
        'tree-cutting' => TreeCutting::class,
        'lumber-dealer' => LumDealer::class,
        'supplier' => Supplier::class,
        'tfpl' => TFPL::class,
        'wildlife' => WildLife::class,
        'lands' => Lands::class,
        'foreshore' => Foreshore::class,
    ];

    if (!array_key_exists($type, $modelMap)) {
        abort(404, 'Document type not recognized.');
    }

    $model = $modelMap[$type];
    $record = $model::findOrFail($id);

    return view('rps-database.documents.view-document', compact('record', 'type'));
}

}
