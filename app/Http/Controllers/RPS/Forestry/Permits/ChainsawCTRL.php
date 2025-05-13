<?php

namespace App\Http\Controllers\RPS\Forestry\Permits;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Chainsaw;
use App\Models\ChainsawParent;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChainsawCTRL extends Controller
{


    public function add_folder(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
        ]);

        Address::create([
            'address' => $request->address,
            'type' => 'chainsaw',
        ]);

        return redirect()->route('chainsaw')->with('success', 'Folder has been created');
    }


public function add_client(Request $request, $address) {
    $request->validate([
        'name' => 'nullable|string|max:255',
    ]);

    $add = Address::where('address', $address)->firstOrFail();

    ChainsawParent::create([
        'name' => $request->name,
        'address' => $add->address,
        'type' => 'chainsaw',
    ]);

    return redirect()->back()->with('success', 'Client added successfully.');
}


public function folder($add) {
    $address = Address::where('address', $add)->firstOrFail();

    $client = ChainsawParent::where('address', $address->address)
                ->orderBy('name', 'asc')
                ->get();

    $count = ChainsawParent::where('address',$add)->count();

    return view('rps-database.forestry.permits.chainsaw.address', compact('client', 'address','count'));
}


public function remark($add){


$address = Address::where('address',$add)->firstOrFail();

$new = Chainsaw::where('client_address',$add)->where('remarks','NEW')->count();
$renewal = Chainsaw::where('client_address',$add)->where('remarks','RENEWAL')->count();
$expired = Chainsaw::where('client_address',$add)->where('remarks','EXPIRED')->count();

return view('rps-database.forestry.permits.chainsaw.remarks.chainsaw-remarks',compact('address','new','renewal','expired'));

}

public function remark_new($address)
{
    $add = Address::where('address', $address)->firstOrFail();

    $client = ChainsawParent::where('address', $address)
        ->where(function ($query) {
            $query->whereHas('chainsaws', function ($q) {
                $q->where('remarks', 'new');
            })
            ->orDoesntHave('chainsaws');
        })
        ->with(['chainsaws' => function ($q) {
            $q->where('remarks', 'new');
        }])
        ->orderBy('name','asc')
        ->get();

    return view('rps-database.forestry.permits.chainsaw.remarks.chainsaw-new', compact('add', 'client'));
}



public function remark_renewal($address) {

    $add = Address::where('address', $address)->firstOrFail();

    $client = ChainsawParent::where('address', $address)
    ->whereHas('chainsaws',function($query){
        $query->where('remarks','renewal');
    }) ->with(['chainsaws' => function($query){
            $query->where('remarks','renewal');
        }])
        ->orderBy('name','asc')
        ->get();


    return view('rps-database.forestry.permits.chainsaw.remarks.chainsaw-renewal', compact('add', 'client'));
}


public function remark_expired($address){


    $add = Address::where('address', $address)->firstOrFail();

    $client = ChainsawParent::where('address', $address)
    ->whereHas('chainsaws',function($query){
        $query->where('remarks','expired');
    }) ->with(['chainsaws' => function($query){
            $query->where('remarks','expired');
        }])
        ->orderBy('name','asc')
        ->get();


return view('rps-database.forestry.permits.chainsaw.remarks.chainsaw-expired',compact('add','client'));

}


public function table_new($name)
{
    $client = ChainsawParent::where('id', $name)->firstOrFail();

    $table = Chainsaw::where('chainsaw_parent_id', $name)
        ->where('client_address', $client->address)
        ->where('remarks','new')
        ->get();

    $parent = $table->isEmpty() ? null : $table->first()->parent;

    return view('rps-database.forestry.permits.chainsaw.remarks.table.remark-new', compact('client', 'parent', 'table'));
}

public function table_renewal($name)
{
    $client = ChainsawParent::where('id', $name)->firstOrFail();

    $table = Chainsaw::where('chainsaw_parent_id', $name)
        ->where('client_address', $client->address)
        ->where('remarks','renewal')
        ->get();

    $parent = $table->isEmpty() ? null : $table->first()->parent;

    return view('rps-database.forestry.permits.chainsaw.remarks.table.remark-renewal', compact('client', 'parent', 'table'));
}


public function table_expired($name)
{
    $client = ChainsawParent::where('id', $name)->firstOrFail();

    $table = Chainsaw::where('chainsaw_parent_id', $name)
        ->where('client_address', $client->address)
        ->where('remarks','expired')
        ->get();

    $parent = $table->isEmpty() ? null : $table->first()->parent;

    return view('rps-database.forestry.permits.chainsaw.remarks.table.remark-expired', compact('client', 'parent', 'table'));
}



public function client($name)
{
    $client = ChainsawParent::where('id', $name)->firstOrFail();

    $table = Chainsaw::where('chainsaw_parent_id', $name)
        ->where('client_address', $client->address)
        ->get();

    $parent = $table->isEmpty() ? null : $table->first()->parent;

    return view('rps-database.forestry.permits.chainsaw.client-table', compact('client', 'parent', 'table'));
}




public function add_info(Request $request, $id){


    $request->validate([

    'name'=> 'nullable|string|max:255',
    'address'=> 'nullable|string|max:255',
    'brand'=> 'nullable|string|max:255',
    'serial_num'=> 'nullable|string|max:255',
    'date_registered'=> 'nullable|string|max:255',
    'date_expiry'=> 'nullable|string|max:255',
    'control_no'=> 'nullable|string|max:255',
    'date_acquired'=> 'nullable|string|max:255',
    'horse_power'=> 'nullable|string|max:255',
    'length_guidebar'=> 'nullable|string|max:255',
    'sticker'=> 'nullable|string|max:255',
    'purpose'=> 'nullable|string|max:255',
    'remarks'=> 'nullable|string|max:255',
    'document' => 'nullable|file|mimes:pdf,doc,docx,png,jpeg,jpg',

    ]);

    $parent = ChainsawParent::Where('id',$id)->firstOrFail();

    $register = $request->date_registered ? : null;
    $expiry = $request->date_expiry ? : null;
    $acquired = $request->date_acquired ? : null;


    $document = null;

    if($request->HasFile('document')){
        $file = $request->file('document');
        $document = $file->getClientOriginalName();
        $file->move(public_path('file'),$document);

    }


    Chainsaw::Create([

    'name'=>$request->name,
    'address'=>$request->address,
    'brand'=>$request->brand,
    'serial_num'=>$request->serial_num,
    'date_registered'=>$register,
    'date_expiry'=>$expiry,
    'control_no'=>$request->control_no,
    'date_acquired'=>$acquired,
    'horse_power'=>$request->horse_power,
    'length_guidebar'=>$request->length_guidebar,
    'sticker'=>$request->sticker,
    'purpose'=>$request->purpose,
    'remarks'=>$request->remarks,
    'permit_type'=>'chainsaw',
    'user_id'=>Auth::id(),
    'chainsaw_parent_id'=>$parent->id,
    'client_address'=>$parent->address,
    'document'=>$document,

    ]);

    return redirect()->back()->with('success','information successfully added');

}

public function destroy($id){


$chainsaw = Chainsaw::findOrFail($id);

$chainsaw->delete();

return redirect()->back()->with('danger','An information has been deleted!');


}

public function edit(Request $request, $id)
{

    $client = Chainsaw::findOrFail($id);

    $validated = $request->validate([
        'name' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:255',
        'brand' => 'nullable|string|max:255',
        'serial_num' => 'nullable|string|max:255',
        'date_registered' => 'nullable|date',
        'date_expiry' => 'nullable|date',
        'control_no' => 'nullable|string|max:255',
        'date_acquired' => 'nullable|date',
        'horse_power' => 'nullable|string|max:255',
        'length_guidebar' => 'nullable|string|max:255',
        'sticker' => 'nullable|string|max:255',
        'purpose' => 'nullable|string|max:255',
        'remarks' => 'nullable|string|max:255',
        'document'=>'nullable|file|mimes:pdf',
    ]);

    if ($request->hasFile('document')) {
        $file = $request->file('document');
        $filename =$file->getClientOriginalName();
        $file->move(public_path('file'), $filename);
        $validated['document'] = $filename;
    }

    $client->update($validated);

    return redirect()->back()->with('primary', 'Information has been updated');
}


}
