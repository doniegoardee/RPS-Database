<?php

namespace App\Http\Controllers\RPS\Imports\Foresty;

use App\Http\Controllers\Controller;
use App\Imports\Forestry\ChainsawImport as ForestryChainsawImport;
use App\Models\Chainsaw;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ChainsawImport extends Controller
{

    public function index(){


        return view('rps-database.forestry.permits.chainsaw.chainsaw-import');
    }

    public function import_chainsaw(Request $request, $address)
    {
        $request->validate([
            'import' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        try {
            Excel::import(new ForestryChainsawImport($address), $request->file('import'));

            return back()->with('success', 'Data imported successfully.');
        } catch (\Exception $e) {

            return back()->with('error', 'Error importing file: ' . $e->getMessage() . '. Please download the proper template.');
        }
    }

}
