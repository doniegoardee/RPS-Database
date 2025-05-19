<?php

namespace App\Http\Controllers\RPS\Export;

use App\Exports\RPS\Forestry\Permits\Export;
use App\Exports\RPS\Forestry\Permits\LumberDealerExport;
use App\Exports\RPS\Forestry\Tenurial\TenurialExports;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RPS\Forestry\Tenurial\ExportData;
use App\Models\Forestry\Tenurial\TenurialInstrument;
use App\Models\Forestry\Tenurial\TIParent;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ExportController extends Controller
{


    public function exportTemplate(){

        return Excel::download(new Export, 'import-template.xlsx');
    }

    public function ExportTenurialTemplate(){

        return Excel::download(new TenurialExports,'tenurial-template.xlsx');

    }

    public function ExportLumberDealerTemplate(){

        return Excel::download(new LumberDealerExport,'lumber-dealer-template.xlsx');

    }







public function exportPerType(Request $request, $tenur_type)
{
    $type = $tenur_type;

    if (!$type) {
        return redirect()->back()->withErrors(['Tenurial type is required.']);
    }

    $fileName = "Tenurial_Instruments_{$type}.xlsx";

    $tiParents = TIParent::with(['ti_address', 'TI' => function ($q) use ($type) {
        $q->whereHas('tenurType', fn($q2) => $q2->where('title', $type));
    }])->get();

    if ($tiParents->isEmpty() || $tiParents->every(fn($parent) => $parent->TI->isEmpty())) {
        return redirect()->back()->withErrors(['No data found for this tenurial type.']);
    }

    return Excel::download(new ExportData($type, $tiParents), $fileName);
}

}
