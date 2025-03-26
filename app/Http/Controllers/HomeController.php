<?php

namespace App\Http\Controllers;

use App\Models\RPSDocs;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {



        $ti = RPSDocs::where('type','Tenurial Instrument')->count();
        $foreshore = RPSDocs::where('type','Foreshore')->count();
        $ppi = RPSDocs::where('type','API / PPI')->count();

        return view('rps-database.dashboard',compact('ti','foreshore','ppi'));
    }
}
