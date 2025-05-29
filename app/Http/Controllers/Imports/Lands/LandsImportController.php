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

        try {
            $startTime = microtime(true);
            Excel::import(new LandsImportData($address, $lands_type, $startTime), $request->file('file'));
            return redirect()->back()->with('success', 'Lands data imported successfully.');
        } catch (\ErrorException $e) {
            if (str_contains(strtolower($e->getMessage()), 'maximum execution time')) {
                return redirect()->back()->with('error', 'The data is too many, please reduce the number of rows.');
            }
            return redirect()->back()->with('error', 'Error importing file: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error importing file: ' . $e->getMessage());
        }
    }

    public function foreshoreimport(Request $request, $address, $lands_type)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);

        try {
            $startTime = microtime(true);
            Excel::import(new ForeshoreImport($address, $lands_type, $startTime), $request->file('file'));
            return redirect()->back()->with('success', 'Lands data imported successfully.');
        } catch (\ErrorException $e) {
            if (str_contains(strtolower($e->getMessage()), 'maximum execution time')) {
                return redirect()->back()->with('error', 'The data is too many, please reduce the number of rows.');
            }
            return redirect()->back()->with('error', 'Error importing file: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error importing file: ' . $e->getMessage());
        }
    }
}
