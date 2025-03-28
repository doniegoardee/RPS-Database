<?php

namespace App\Http\Controllers;

use App\Models\TenurialInstrument;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {



        $ti = TenurialInstrument::where('type','Tenurial Instrument')->count();
        $ppi = TenurialInstrument::where('type','API / PPI')->count();

        return view('rps-database.dashboard',compact('ti','ppi'));
    }

    public function land(){

    return view('rps-database.lands.lands');

    }

    public function forestry(){

        return view('rps-database.forestry.forestry');

    }

}
