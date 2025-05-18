<?php

namespace App\Http\Controllers\RPS\Export;

use App\Exports\RPS\Forestry\Permits\Export;
use App\Exports\RPS\Forestry\Permits\LumberDealerExport;
use App\Exports\RPS\Forestry\Tenurial\TenurialExports;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
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

}
