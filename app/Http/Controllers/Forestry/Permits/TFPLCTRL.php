<?php

namespace App\Http\Controllers\Forestry\Permits;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Forestry\Permits\TFPL;
use App\Models\Forestry\Permits\TFPLParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TFPLCTRL extends Controller
{

     public function index(){

    $address = Address::where('type','TFPL')->get();

    return view('rps-database.forestry.permits.tfpl.tfpl',compact('address'));

}

public function client($address){


         $add = Address::where('address', $address)->firstOrFail();

        $client = TFPLParent::where('address', $address)
            ->orderBy('name','asc')
            ->get();

        return view('rps-database.forestry.permits.tfpl.data.client',compact('add','client'));
    }


 public function add_client(Request $request, $address){


        $request->validate([
                'name' => 'nullable|string|max:255',
            ]);

            $add = Address::where('address', $address)->firstOrFail();

            TFPLParent::create([
                'name' => $request->name,
                'address' => $add->address,
                'type' => 'TFPL',
            ]);

            return redirect()->back()->with('success', 'Client added successfully.');

    }


 public function client_data($name){


        $client = TFPLParent::where('id', $name)->firstOrFail();

        $table = TFPL::where('tfpl_parent_id', $name)
            ->where('client_address', $client->address)
            ->get();

        $parent = $table->isEmpty() ? null : $table->first()->parent;

        return view('rps-database.forestry.permits.tfpl.data.data', compact('client', 'parent', 'table'));
    }



public function store(Request $request,$id){


        $request->validate([

            'name_permitee'          => 'nullable|string|max:255',
            'place_of_loading'       => 'nullable|string|max:255',
            'destination'            => 'nullable|string|max:255',
            'species'                => 'nullable|string|max:255',
            'volume_of_transport'    => 'nullable|string|max:255',
            'no_finish_product'      => 'nullable|string|max:255',
            'no_finish_lumber'       => 'nullable|string|max:255',
            'date_transport'         => 'nullable|string|max:255',
            'remarks'                => 'nullable|string|max:255',
            'document'               => 'nullable|file|mimes:pdf',



        ]);

        $parent = TFPLParent::where('id',$id)->firstOrFail();


        $document = null;

        if($request->hasFile('document')){

            $file = $request->file('document');
            $document = $file->getClientOriginalName();
            $file->move(public_path('file'),$document);


        }

        TFPL::create([

            'name_permitee' => $request->name_permitee,
            'place_of_loading' => $request->place_of_loading,
            'destination' => $request->destination,
            'species' => $request->species,
            'volume_of_transport' => $request->volume_of_transport,
            'no_finish_product' => $request->no_finish_product,
            'no_finish_lumber' => $request->no_finish_lumber,
            'remarks' => $request->remarks,
            'client_address' => $parent->address,
            'permit_type' => 'TFPL',
            'user_id' => Auth::id(),
            'tfpl_parent_id' => $parent->id,
            'document' => $document,



        ]);


        return redirect()->back()->with('success','document added successfully');


    }

    public function edit(Request $request, $id){

         $client = TFPL::findOrFail($id);

        $validated = $request->validate([
            'name_permitee'          => 'nullable|string|max:255',
            'place_of_loading'       => 'nullable|string|max:255',
            'destination'            => 'nullable|string|max:255',
            'species'                => 'nullable|string|max:255',
            'volume_of_transport'    => 'nullable|string|max:255',
            'no_finish_product'      => 'nullable|string|max:255',
            'no_finish_lumber'       => 'nullable|string|max:255',
            'date_transport'         => 'nullable|string|max:255',
            'remarks'                => 'nullable|string|max:255',
            'document'               => 'nullable|file|mimes:pdf',

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


    $tfpl = TFPL::findOrFail($id);

    $tfpl->delete();

    return redirect()->back()->with('danger','An information has been deleted!');


    }

}
