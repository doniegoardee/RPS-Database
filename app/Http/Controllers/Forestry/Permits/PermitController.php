<?php

namespace App\Http\Controllers\Forestry\Permits;

use App\Http\Controllers\Controller;
use App\Models\Permits;

class PermitController extends Controller
{

public function permit(){

$title = Permits::all();

return view('rps-database.forestry.permits.permit',compact('title'));


}


}
