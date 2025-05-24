<?php

namespace App\Http\Controllers\RPS\Forestry\Permits;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Forestry\Permits\Supplier;
use App\Models\Forestry\Permits\SupplierParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierCTRL extends Controller
{
    public function index(){

    $address = Address::where('type','Lumber Supplier')->get();

    return view('rps-database.forestry.permits.lumber-supplier.lumber-supplier',compact('address'));

}

public function client($address){


         $add = Address::where('address', $address)->firstOrFail();

        $client = SupplierParent::where('address', $address)
            ->orderBy('name','asc')
            ->get();

        return view('rps-database.forestry.permits.lumber-supplier.data.client',compact('add','client'));
    }


 public function add_client(Request $request, $address){


        $request->validate([
                'name' => 'nullable|string|max:255',
            ]);

            $add = Address::where('address', $address)->firstOrFail();

            SupplierParent::create([
                'name' => $request->name,
                'address' => $add->address,
                'type' => 'Lumber Supplier',
            ]);

            return redirect()->back()->with('success', 'Client added successfully.');

    }

 public function client_data($name){


        $client = SupplierParent::where('id', $name)->firstOrFail();

        $table = Supplier::where('supplier_parent_id', $name)
            ->where('client_address', $client->address)
            ->get();

        $parent = $table->isEmpty() ? null : $table->first()->parent;

        return view('rps-database.forestry.permits.lumber-supplier.data.data', compact('client', 'parent', 'table'));
    }



public function store(Request $request,$id){


        $request->validate([

            'name'             => 'nullable|string|max:255',
            'business_name'    => 'nullable|string|max:255',
            'location'         => 'nullable|string|max:255',
            'volume'           => 'nullable|string|max:255',
            'date_issuance'    => 'nullable|string|max:255',
            'date_expiration'  => 'nullable|string|max:255',
            'document'         => 'nullable|file|mimes:pdf',



        ]);

        $parent = SupplierParent::where('id',$id)->firstOrFail();


        $document = null;

        if($request->hasFile('document')){

            $file = $request->file('document');
            $document = $file->getClientOriginalName();
            $file->move(public_path('file'),$document);


        }

        Supplier::create([

            'name' => $request->name,
            'business_name' => $request->business_name,
            'location' => $request->location,
            'volume' => $request->volume,
            'date_issuance' => $request->date_issuance,
            'date_expiration' => $request->date_expiration,
            'client_address' => $parent->address,
            'permit_type' => 'Lumber Supplier',
            'user_id' => Auth::id(),
            'supplier_parent_id' => $parent->id,
            'document' => $document,



        ]);


        return redirect()->back()->with('success','document added successfully');


    }

    public function edit(Request $request, $id){

         $client = Supplier::findOrFail($id);

        $validated = $request->validate([
            'name'             => 'nullable|string|max:255',
            'business_name'    => 'nullable|string|max:255',
            'location'         => 'nullable|string|max:255',
            'volume'           => 'nullable|string|max:255',
            'date_issuance'    => 'nullable|string|max:255',
            'date_expiration'  => 'nullable|string|max:255',
            'document'         => 'nullable|file|mimes:pdf',
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

    public function destroy($id){


    $dealer = Supplier::findOrFail($id);

    $dealer->delete();

    return redirect()->back()->with('danger','An information has been deleted!');

    }


}
