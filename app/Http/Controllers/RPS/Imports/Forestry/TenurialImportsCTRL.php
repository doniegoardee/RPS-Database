<?php

namespace App\Http\Controllers\RPS\Imports\Forestry;

use App\Http\Controllers\Controller;
use App\Imports\Forestry\Tenurial\TenurialImports;
use App\Models\Address;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class TenurialImportsCTRL extends Controller
{
    public function showImportForm($address)
    {
        $add = Address::where('address', $address)->firstOrFail();
        return view('rps-database.forestry.tenurial-instrument.tenurial-doc.import', compact('add'));
    }

    public function importExcel(Request $request, $address, $title)
    {
        $request->validate([
            'import' => 'required|mimes:xlsx,xls,csv',
        ]);

        $file = $request->file('import');

        try {
            Excel::import(new TenurialImports($address, $title), $file);
            return back()->with('success', 'Tenurial data imported successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Import failed: ' . $e->getMessage());
        }
    }


}
