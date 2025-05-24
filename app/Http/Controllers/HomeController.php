<?php

namespace App\Http\Controllers;

use App\Models\Forestry\Permits\Chainsaw;
use App\Models\GSUP;
use App\Models\PermitList;
use App\Models\Permits;
use App\Models\Forestry\Tenurial\TenurialInstrument;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {



        $ti = TenurialInstrument::count() + Chainsaw::count();

        $ppi = TenurialInstrument::where('tenur_type','API / PPI')->count();

        return view('rps-database.dashboard',compact('ti','ppi'));
    }

    public function land(){

    return view('rps-database.lands.lands');

    }

    public function forestry(){

        $ti = TenurialInstrument::count();
        $per = Chainsaw::count();

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



        return view('rps-database.documents.all-doc', compact('tenurial'));
    }


}
