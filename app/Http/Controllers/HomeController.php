<?php

namespace App\Http\Controllers;

use App\Models\GSUP;
use App\Models\PermitList;
use App\Models\Permits;
use App\Models\TenurialInstrument;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {



        $ti = TenurialInstrument::count() + GSUP::count() + PermitList::count();

        $ppi = TenurialInstrument::where('tenur_type','API / PPI')->count();

        return view('rps-database.dashboard',compact('ti','ppi'));
    }

    public function land(){

    return view('rps-database.lands.lands');

    }

    public function forestry(){

        $ti = TenurialInstrument::count();
        $per = GSUP::count() + PermitList::count();

        return view('rps-database.forestry.forestry',compact('ti','per'));

    }




    public function all_doc()
    {
        $tenurial = TenurialInstrument::all()->map(function ($item) {
            return [
                'id' => $item->id,
                'tracking_num' => $item->tracking_num,
                'subject' => $item->subject,
                'date' => $item->date,
                'file' => $item->file,
                'type' => $item->tenur_type,
                'remarks' => $item->remarks
            ];
        });

        $gsup = GSUP::all()->map(function ($item) {
            return [
                'id' => $item->id,
                'tracking_num' => $item->tracking_num,
                'subject' => $item->subject,
                'date' => $item->file_year,
                'file' => $item->document,
                'type' => 'GSUP',
                'remarks' => $item->remarks
            ];
        });

        $permitList = PermitList::all()->map(function ($item) {
            return [
                'id' => $item->id,
                'tracking_num' => $item->app_no,
                'name' => $item->name,
                'subject' => $item->subject,
                'date' => $item->date,
                'file' => $item->document,
                'remarks' => $item->remarks
            ];
        });

        return view('rps-database.documents.all-doc', compact('tenurial', 'gsup', 'permitList'));
    }


}
