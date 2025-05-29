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
    public function import_chainsaw(Request $request, $address)
    {
        $request->validate([
            'import' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        try {
            $startTime = microtime(true);
            Excel::import(new ChainsawImport($address, $startTime), $request->file('import'));

            return back()->with('success', 'Chainsaw data imported successfully.');
        } catch (\ErrorException $e) {
            if (str_contains(strtolower($e->getMessage()), 'maximum execution time')) {
                return back()->with('error', 'The data is too many, please reduce the number of rows.');
            }
            return back()->with('error', 'Error importing file: ' . $e->getMessage());
        } catch (\Exception $e) {
            return back()->with('error', 'Error importing file: ' . $e->getMessage());
        }
    }

    public function importTreeCutting(Request $request, $add)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        try {
            $startTime = microtime(true);
            Excel::import(new TreeCuttingImport($add, $startTime), $request->file('excel_file'));

            return back()->with('success', 'Tree Cutting data imported successfully.');
        } catch (\ErrorException $e) {
            if (str_contains(strtolower($e->getMessage()), 'maximum execution time')) {
                return back()->with('error', 'The data is too many, please reduce the number of rows.');
            }
            return back()->with('error', 'Error importing file: ' . $e->getMessage());
        } catch (\Exception $e) {
            return back()->with('error', 'Error importing file: ' . $e->getMessage());
        }
    }

    public function importLumberDealer(Request $request, $add)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        try {
            $startTime = microtime(true);
            Excel::import(new LumberDealerImport($add, $startTime), $request->file('excel_file'));

            return back()->with('success', 'Lumber Dealer data imported successfully.');
        } catch (\ErrorException $e) {
            if (str_contains(strtolower($e->getMessage()), 'maximum execution time')) {
                return back()->with('error', 'The data is too many, please reduce the number of rows.');
            }
            return back()->with('error', 'Error importing file: ' . $e->getMessage());
        } catch (\Exception $e) {
            return back()->with('error', 'Error importing file: ' . $e->getMessage());
        }
    }

    public function importLumberSupplier(Request $request, $add)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        try {
            $startTime = microtime(true);
            Excel::import(new LumberSupplierImport($add, $startTime), $request->file('excel_file'));

            return back()->with('success', 'Lumber Supplier data imported successfully.');
        } catch (\ErrorException $e) {
            if (str_contains(strtolower($e->getMessage()), 'maximum execution time')) {
                return back()->with('error', 'The data is too many, please reduce the number of rows.');
            }
            return back()->with('error', 'Error importing file: ' . $e->getMessage());
        } catch (\Exception $e) {
            return back()->with('error', 'Error importing file: ' . $e->getMessage());
        }
    }

    public function importWildlife(Request $request, $add)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        try {
            $startTime = microtime(true);
            Excel::import(new WildlifeImport($add, $startTime), $request->file('excel_file'));

            return back()->with('success', 'Wildlife data imported successfully.');
        } catch (\ErrorException $e) {
            if (str_contains(strtolower($e->getMessage()), 'maximum execution time')) {
                return back()->with('error', 'The data is too many, please reduce the number of rows.');
            }
            return back()->with('error', 'Error importing file: ' . $e->getMessage());
        } catch (\Exception $e) {
            return back()->with('error', 'Error importing file: ' . $e->getMessage());
        }
    }

    public function importTFPL(Request $request, $add)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        try {
            $startTime = microtime(true);
            Excel::import(new TFPLImport($add, $startTime), $request->file('excel_file'));

            return back()->with('success', 'Data imported successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Import error: ' . $e->getMessage());
        }
    }
}
