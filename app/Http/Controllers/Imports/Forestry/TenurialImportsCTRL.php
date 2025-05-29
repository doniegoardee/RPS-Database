<?php

namespace App\Http\Controllers\Imports\Forestry;

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
            $startTime = microtime(true);  // Start time for import
            Excel::import(new TenurialImports($address, $title, $startTime), $file);

            return back()->with('success', 'Tenurial data imported successfully.');
        } catch (\Illuminate\Database\QueryException $e) {
            Log::error('QueryException during import: ' . $e->getMessage());
            return back()->with('error', 'Import failed: A database error occurred. Please check your file.');
        } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
            Log::error('FileException during import: ' . $e->getMessage());
            return back()->with('error', 'Import failed: Unable to read the file. Try a different format.');
        } catch (\ErrorException $e) {
            if (str_contains(strtolower($e->getMessage()), 'maximum execution time')) {
                Log::error('Timeout during import: ' . $e->getMessage());
                return back()->with('error', 'Import failed: The data is too many, please reduce the number of rows.');
            }

            Log::error('ErrorException during import: ' . $e->getMessage());
            return back()->with('error', 'Import failed due to a system error.');
        } catch (\Exception $e) {
            Log::error('General exception during import: ' . $e->getMessage());
            return back()->with('error', 'Import failed: ' . $e->getMessage());
        }
    }
}
