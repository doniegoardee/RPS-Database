<?php

namespace App\Http\Controllers\Forestry\Permits;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Forestry\Permits\WildLife;
use App\Models\Forestry\Permits\WildLifeParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WildlifeCTRL extends Controller
{

    public function index(){


    $address = Address::where('type','Wildlife')->get();

        return view('rps-database.forestry.permits.wildlife.wildlife',compact('address'));

    }

    public function client($address){


         $add = Address::where('address', $address)->firstOrFail();

        $client = WildLifeParent::where('address', $address)
            ->orderBy('name','asc')
            ->get();

        return view('rps-database.forestry.permits.wildlife.data.client',compact('add','client'));
    }


 public function add_client(Request $request, $address){


        $request->validate([
                'name' => 'nullable|string|max:255',
            ]);

            $add = Address::where('address', $address)->firstOrFail();

            WildLifeParent::create([
                'name' => $request->name,
                'address' => $add->address,
                'type' => 'Wildlife',
            ]);

            return redirect()->back()->with('success', 'Client added successfully.');

    }

 public function client_data($name){


        $client = WildLifeParent::where('id', $name)->firstOrFail();

        $table = WildLife::where('wildlife_parent_id', $name)
            ->where('client_address', $client->address)
            ->get();

        $parent = $table->isEmpty() ? null : $table->first()->parent;

        return view('rps-database.forestry.permits.wildlife.data.data', compact('client', 'parent', 'table'));
    }



public function store(Request $request,$id){


        $request->validate([

            'name'             => 'nullable|string|max:255',
            'address'          => 'nullable|string|max:255',
            'permit_no'        => 'nullable|string|max:255',
            'date_issuance'    => 'nullable|string|max:255',
            'date_expiry'      => 'nullable|string|max:255',
            'fee'              => 'nullable|string|max:255',
            'species_name'     => 'nullable|string|max:255',
            'description'      => 'nullable|string|max:255',
            'quantity'         => 'nullable|string|max:255',
            'unit_measure'     => 'nullable|string|max:255',
            'origin'           => 'nullable|string|max:255',
            'destination'      => 'nullable|string|max:255',
            'purpose'          => 'nullable|string|max:255',
            'document'         => 'nullable|file|mimes:pdf',



        ]);

        $parent = WildLifeParent::where('id',$id)->firstOrFail();


        $document = null;

        if($request->hasFile('document')){

            $file = $request->file('document');
            $document = $file->getClientOriginalName();
            $file->move(public_path('file'),$document);


        }

        WildLife::create([

            'name' => $request->name,
            'address' => $request->address,
            'permit_no' => $request->permit_no,
            'date_issuance' => $request->date_issuance,
            'date_expiry' => $request->date_expiry,
            'fee' => $request->fee,
            'species_name' => $request->expiration_date,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'unit_measure' => $request->unit_measure,
            'origin' => $request->origin,
            'destination' => $request->destination,
            'purpose' => $request->purpose,
            'client_address' => $parent->address,
            'permit_type' => 'Tree Cutting',
            'user_id' => Auth::id(),
            'wildlife_parent_id' => $parent->id,
            'document' => $document,



        ]);


        return redirect()->back()->with('success','document added successfully');


    }

    public function edit(Request $request, $id){

         $client = WildLife::findOrFail($id);

        $validated = $request->validate([
            'name'             => 'nullable|string|max:255',
            'address'          => 'nullable|string|max:255',
            'permit_no'        => 'nullable|string|max:255',
            'date_issuance'    => 'nullable|string|max:255',
            'date_expiry'      => 'nullable|string|max:255',
            'fee'              => 'nullable|string|max:255',
            'species_name'     => 'nullable|string|max:255',
            'description'      => 'nullable|string|max:255',
            'quantity'         => 'nullable|string|max:255',
            'unit_measure'     => 'nullable|string|max:255',
            'origin'           => 'nullable|string|max:255',
            'destination'      => 'nullable|string|max:255',
            'purpose'          => 'nullable|string|max:255',
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

    public function destroy($id){


    $wildlife = WildLife::findOrFail($id);

    $wildlife->delete();

    return redirect()->back()->with('danger','An information has been deleted!');


    }

}
