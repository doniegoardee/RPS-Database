<?php

namespace App\Http\Controllers\RPS\Lands;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Lands\FPA;
use App\Models\Lands\FPAParents;
use Illuminate\Http\Request;

class FPAController extends Controller
{


public function index(){

    $address = Address::where('type','FPA')->get();

    return view('rps-database.lands.fpa.fpa',compact('address'));

}

 public function remark($add){


        $address = Address::where('address',$add)->firstOrFail();

        $new = FPA::where('client_address',$add)->where('remarks','NEW')->count();
        $renewal = FPA::where('client_address',$add)->where('remarks','RENEWAL')->count();
        $expired = FPA::where('client_address',$add)->where('remarks','EXPIRED')->count();

        return view('rps-database.lands.fpa.remarks.fpa-remarks',compact('address','new','renewal','expired'));

    }

public function remark_new($address){
        $add = Address::where('address', $address)->firstOrFail();

        $client = FPAParents::where('address', $address)
            ->where(function ($query) {
                $query->whereHas('FPA', function ($q) {
                    $q->where('remarks', 'new');
                })
                ->orDoesntHave('FPA');
            })
            ->with(['FPA' => function ($q) {
                $q->where('remarks', 'new');
            }])
            ->orderBy('name','asc')
            ->get();

        return view('rps-database.forestry.permits.lumber-dealer.remarks.dealer-new', compact('add', 'client'));
    }



    public function remark_renewal($address) {

        $add = Address::where('address', $address)->firstOrFail();

        $client = FPAParents::where('address', $address)
        ->whereHas('FPA',function($query){
            $query->where('remarks','renewal');
        }) ->with(['FPA' => function($query){
                $query->where('remarks','renewal');
            }])
            ->orderBy('name','asc')
            ->get();


        return view('rps-database.forestry.permits.lumber-dealer.remarks.dealer-renewal', compact('add', 'client'));
    }


    public function remark_expired($address){


        $add = Address::where('address', $address)->firstOrFail();

        $client = FPAParents::where('address', $address)
        ->whereHas('FPA',function($query){
            $query->where('remarks','expired');
        }) ->with(['FPA' => function($query){
                $query->where('remarks','expired');
            }])
            ->orderBy('name','asc')
            ->get();


    return view('rps-database.forestry.permits.lumber-dealer.remarks.dealer-expired',compact('add','client'));

    }


}
