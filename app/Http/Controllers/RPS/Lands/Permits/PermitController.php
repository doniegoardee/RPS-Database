<?php

namespace App\Http\Controllers\RPS\Lands\Permits;

use App\Http\Controllers\Controller;
use App\Models\Permits;
use Illuminate\Http\Request;

class PermitController extends Controller
{

public function permit(){

$title = Permits::all();

return view('rps-database.forestry.permits.permit',compact('title'));


}

public function permit_list($title)
{
    $permit = Permits::where('permit_title', $title)->firstOrFail();
    $type = $permit->permit;

return view('rps-database.forestry.permits.permit-documents',compact('permit','type'));

}

public function add_list(){

return view('rps-database.forestry.permits.add-document');


}


}
