<?php

namespace App\Http\Controllers\RPS\Lands\Tenurial;

use App\Http\Controllers\Controller;
use App\Models\TypeTI;
use Illuminate\Http\Request;

class TIController extends Controller
{
    public function tenurial(){

        $title = TypeTI::all();

        return view('rps-database.forestry.tenurial-instrument.tenurial-instrument',compact('title'));

    }
}
