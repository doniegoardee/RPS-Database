<?php

namespace App\Http\Controllers\RPS\Imports\Lands;

use App\Http\Controllers\Controller;
use App\Imports\Lands\FPAImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class LandsImportController extends Controller
{


public function importExcel(Request $request, $address, $title){

        $request->validate([
            'import' => 'required|mimes:xlsx,xls,csv',
        ]);

        $file = $request->file('import');

        try {
            Excel::import(new FPAImport($address, $title), $file);
            return back()->with('success', 'Data has been Imported.');
        } catch (\Exception $e) {
            return back()->with('error', 'Import failed: ' . $e->getMessage());
        }
}


}
