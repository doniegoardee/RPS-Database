<?php

namespace App\Http\Controllers\Imports\Forestry;

use App\Http\Controllers\Controller;
use App\Imports\Forestry\Permits\ChainsawImport;
use App\Imports\Forestry\Permits\LumberDealerImport;
use App\Imports\Forestry\Permits\LumberSupplierImport;
use App\Imports\Forestry\Permits\TFPLImport;
use App\Imports\Forestry\Permits\TreeCuttingImport;
use App\Imports\Forestry\Permits\WildlifeImport;
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

public function importTreeCutting(Request $request, $add)
{
    $request->validate([
        'excel_file' => 'required|file|mimes:xlsx,xls,csv',
    ]);

    $clientAddress = $add;

    Excel::import(new TreeCuttingImport($clientAddress), $request->file('excel_file'));

    return redirect()->back()->with('success', 'Tree Cutting data imported successfully.');
}


public function importLumberDealer(Request $request, $add)
{
    $request->validate([
        'excel_file' => 'required|file|mimes:xlsx,xls,csv',
    ]);

    $clientAddress = $add;

    Excel::import(new LumberDealerImport($clientAddress), $request->file('excel_file'));

    return redirect()->back()->with('success', 'Lumber data imported successfully.');
}


public function importLumberSupplier(Request $request, $add)
{
    $request->validate([
        'excel_file' => 'required|file|mimes:xlsx,xls,csv',
    ]);

    $clientAddress = $add;

    Excel::import(new LumberSupplierImport($clientAddress), $request->file('excel_file'));

    return redirect()->back()->with('success', 'Lumber data imported successfully.');
}


public function importWildlife(Request $request, $add)
{
    $request->validate([
        'excel_file' => 'required|file|mimes:xlsx,xls,csv',
    ]);

    $clientAddress = $add;

    Excel::import(new WildlifeImport($clientAddress), $request->file('excel_file'));

    return redirect()->back()->with('success', 'Lumber data imported successfully.');
}


public function importTFPL(Request $request, $add)
{
    $request->validate([
        'excel_file' => 'required|file|mimes:xlsx,xls,csv',
    ]);

    $clientAddress = $add;

    Excel::import(new TFPLImport($clientAddress), $request->file('excel_file'));

    return redirect()->back()->with('success', 'Lumber data imported successfully.');
}



}
