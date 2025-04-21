<?php

namespace App\Http\Controllers\RPS\Viewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewerController extends Controller
{
    public function index(){

        return view('rps-database.viewer.user-dashboard');


    }
}
