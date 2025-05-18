<?php

namespace App\Http\Controllers\RPS\Forestry\Permits;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Forestry\Permits\LumDealer;
use App\Models\Forestry\Permits\LumDealerParent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LumberDealerCTRL extends Controller
{


public function index(){

    $address = Address::where('type','Lumber Dealer')->get();

    return view('rps-database.forestry.permits.lumber-dealer.lumber-dealer',compact('address'));

}

    public function dealer_folder(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
        ]);

        Address::create([
            'address' => $request->address,
            'type' => 'Lumber Dealer',
        ]);

        return redirect()->route('lumber.dealer')->with('success', 'Folder has been created');
    }



    public function remark($add){


        $address = Address::where('address',$add)->firstOrFail();

        $new = LumDealer::where('client_address',$add)->where('remarks','NEW')->count();
        $renewal = LumDealer::where('client_address',$add)->where('remarks','RENEWAL')->count();
        $expired = LumDealer::where('client_address',$add)->where('remarks','EXPIRED')->count();

        return view('rps-database.forestry.permits.lumber-dealer.remarks.remarks',compact('address','new','renewal','expired'));

    }

    public function remark_new($address){
        $add = Address::where('address', $address)->firstOrFail();

        $client = LumDealerParent::where('address', $address)
            ->where(function ($query) {
                $query->whereHas('lumber_dealers', function ($q) {
                    $q->where('remarks', 'new');
                })
                ->orDoesntHave('lumber_dealers');
            })
            ->with(['lumber_dealers' => function ($q) {
                $q->where('remarks', 'new');
            }])
            ->orderBy('name','asc')
            ->get();

        return view('rps-database.forestry.permits.lumber-dealer.remarks.dealer-new', compact('add', 'client'));
    }



    public function remark_renewal($address) {

        $add = Address::where('address', $address)->firstOrFail();

        $client = LumDealerParent::where('address', $address)
        ->whereHas('lumber_dealers',function($query){
            $query->where('remarks','renewal');
        }) ->with(['lumber_dealers' => function($query){
                $query->where('remarks','renewal');
            }])
            ->orderBy('name','asc')
            ->get();


        return view('rps-database.forestry.permits.lumber-dealer.remarks.dealer-renewal', compact('add', 'client'));
    }


    public function remark_expired($address){


        $add = Address::where('address', $address)->firstOrFail();

        $client = LumDealerParent::where('address', $address)
        ->whereHas('lumber_dealers',function($query){
            $query->where('remarks','expired');
        }) ->with(['lumber_dealers' => function($query){
                $query->where('remarks','expired');
            }])
            ->orderBy('name','asc')
            ->get();


    return view('rps-database.forestry.permits.lumber-dealer.remarks.dealer-expired',compact('add','client'));

    }


    public function add_client(Request $request, $address){


        $request->validate([
                'name' => 'nullable|string|max:255',
            ]);

            $add = Address::where('address', $address)->firstOrFail();

            LumDealerParent::create([
                'name' => $request->name,
                'address' => $add->address,
                'type' => 'Lumber Dealer',
            ]);

            return redirect()->back()->with('success', 'Client added successfully.');

    }



    public function table_new($name){


        $client = LumDealerParent::where('id', $name)->firstOrFail();

        $table = LumDealer::where('dealer_parent_id', $name)
            ->where('client_address', $client->address)
            ->where('remarks','new')
            ->get();

        $parent = $table->isEmpty() ? null : $table->first()->parent;

        return view('rps-database.forestry.permits.lumber-dealer.table.new', compact('client', 'parent', 'table'));
    }

    public function table_renewal($name){


        $client = LumDealerParent::where('id', $name)->firstOrFail();

        $table = LumDealer::where('dealer_parent_id', $name)
            ->where('client_address', $client->address)
            ->where('remarks','renewal')
            ->get();

        $parent = $table->isEmpty() ? null : $table->first()->parent;

        return view('rps-database.forestry.permits.lumber-dealer.table.renewal', compact('client', 'parent', 'table'));
    }


    public function table_expired($name){


        $client = LumDealerParent::where('id', $name)->firstOrFail();

        $table = LumDealer::where('dealer_parent_id', $name)
            ->where('client_address', $client->address)
            ->where('remarks','expired')
            ->get();

        $parent = $table->isEmpty() ? null : $table->first()->parent;

        return view('rps-database.forestry.permits.lumber-dealer.table.expired', compact('client', 'parent', 'table'));
    }


    public function add_info(Request $request, $id){


        $request->validate([

        'name'=> 'nullable|string|max:255',
        'address'=> 'nullable|string|max:255',
        'date_registered'=> 'nullable|string|max:255',
        'date_expiry'=> 'nullable|string|max:255',
        'control_no'=> 'nullable|string|max:255',
        'purpose'=> 'nullable|string|max:255',
        'remarks'=> 'nullable|string|max:255',
        'document' => 'nullable|file|mimes:pdf,doc,docx,png,jpeg,jpg',

        ]);

        $parent = LumDealerParent::Where('id',$id)->firstOrFail();

        $register = $request->date_registered ? : null;
        $expiry = $request->date_expiry ? : null;


        $document = null;

        if($request->HasFile('document')){
            $file = $request->file('document');
            $document = $file->getClientOriginalName();
            $file->move(public_path('file'),$document);

        }


        LumDealer::Create([

        'name'=>$request->name,
        'address'=>$request->address,
        'date_registered'=>$register,
        'date_expiry'=>$expiry,
        'control_no'=>$request->control_no,
        'purpose'=>$request->purpose,
        'remarks'=>$request->remarks,
        'permit_type'=>'Lumber Dealer',
        'user_id'=>Auth::id(),
        'dealer_parent_id'=>$parent->id,
        'client_address'=>$parent->address,
        'document'=>$document,

        ]);

        return redirect()->back()->with('success','information successfully added');

    }

    public function destroy($id){


        $chainsaw = LumDealer::findOrFail($id);

        $chainsaw->delete();

        return redirect()->back()->with('danger','An information has been deleted!');


    }


    public function edit(Request $request, $id){


        $client = LumDealer::findOrFail($id);

        $validated = $request->validate([
            'name'              => 'nullable|string|max:255',
            'address'           => 'nullable|string|max:255',
            'date_registered'   => 'nullable|date',
            'date_expiry'       => 'nullable|date',
            'control_no'        => 'nullable|string|max:255',
            'purpose'           => 'nullable|string|max:255',
            'remarks'           => 'nullable|string|max:255',
            'document'          => 'nullable|file|mimes:pdf',
        ]);

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('file'), $filename);
            $validated['document'] = $filename;
        } else {
            $validated['document'] = $client->document;
        }

        $client->update($validated);

        return redirect()->back()->with('success', 'Information updated successfully');
    }


}
