<?php

namespace App\Http\Controllers;

use App\Models\Forestry\Permits\Chainsaw;
use App\Models\Forestry\Permits\LumDealer;
use App\Models\Forestry\Permits\Supplier;
use App\Models\Forestry\Permits\TFPL;
use App\Models\Forestry\Permits\TreeCutting;
use App\Models\Forestry\Permits\WildLife;
use App\Models\GSUP;
use App\Models\PermitList;
use App\Models\Permits;
use App\Models\Forestry\Tenurial\TenurialInstrument;
use App\Models\Lands\Foreshore;
use App\Models\Lands\Lands;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {



        $ti = TenurialInstrument::count() + Chainsaw::count() + LumDealer::count() + Supplier::count() + WildLife::count() + TFPL::count() + TreeCutting::count();

        $ppi = Lands::count() + Foreshore::count();

        return view('rps-database.dashboard',compact('ti','ppi'));
    }

    public function land(){

    $fpa = Lands::where('lands_type','FPA')->count();
    $rfpa = Lands::where('lands_type','RFPA')->count();
    $sp = Lands::where('lands_type','SP')->count();

    $foreshore = Foreshore::count();

    return view('rps-database.lands.lands',compact('fpa','rfpa','sp','foreshore'));

    }

    public function forestry(){

        $ti = TenurialInstrument::count();
        $per = Chainsaw::count() + LumDealer::count() + Supplier::count() + WildLife::count() + TFPL::count() + TreeCutting::count();

        return view('rps-database.forestry.forestry',compact('ti','per'));

    }


}
