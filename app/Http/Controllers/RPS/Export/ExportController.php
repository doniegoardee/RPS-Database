<?php

namespace App\Http\Controllers\RPS\Export;

use App\Exports\RPS\Forestry\Permits\Export;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExportController extends Controller
{


    public function exportTemplate()
{
    return Excel::download(new Export, 'import-template.xlsx');
}

}
