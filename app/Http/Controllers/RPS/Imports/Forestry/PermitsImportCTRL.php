<?php

namespace App\Http\Controllers\RPS\Imports\Forestry;

use App\Http\Controllers\Controller;
use App\Imports\Forestry\Permits\ChainsawImport;
use App\Imports\Forestry\Permits\LumberDealerImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class PermitsImportCTRL extends Controller
{


    public function import_chainsaw(Request $request, $address){


        $request->validate([
            'import' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        try {
            Excel::import(new ChainsawImport($address), $request->file('import'));

            return back()->with('success', 'Data imported successfully.');
        } catch (\Exception $e) {

            return back()->with('error', 'Error importing file: ' . $e->getMessage() . '. Please download the proper template.');
        }
    }

     public function lumber_dealer(Request $request, $address){

        $request->validate([
            'import' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        try {
            Excel::import(new LumberDealerImport($address), $request->file('import'));

            return back()->with('success', 'Data imported successfully.');
        } catch (\Exception $e) {

            return back()->with('error', 'Error importing file: ' . $e->getMessage() . '. Please download the proper template.');
        }
    }
}
