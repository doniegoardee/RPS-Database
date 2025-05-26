<?php

namespace App\Http\Controllers\Imports\Lands;

use App\Http\Controllers\Controller;
use App\Imports\Lands\ForeshoreImport;
use App\Imports\Lands\FPAImport;
use App\Imports\Lands\LandsImportData;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LandsImportController extends Controller
{




public function import(Request $request, $address, $lands_type)
{
    $request->validate([
        'file' => 'required|file|mimes:xlsx,xls',
    ]);

    Excel::import(new LandsImportData($address, $lands_type), $request->file('file'));

    return redirect()->back()->with('success', 'Lands data imported successfully.');
}

public function foreshoreimport(Request $request, $address, $lands_type)
{
    $request->validate([
        'file' => 'required|file|mimes:xlsx,xls',
    ]);

    Excel::import(new ForeshoreImport($address, $lands_type), $request->file('file'));

    return redirect()->back()->with('success', 'Lands data imported successfully.');
}




}
