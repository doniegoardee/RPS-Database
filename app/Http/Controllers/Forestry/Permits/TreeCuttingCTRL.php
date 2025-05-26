<?php

namespace App\Http\Controllers\Forestry\Permits;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Forestry\Permits\TreeCutting;
use App\Models\Forestry\Permits\TreeCuttingParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TreeCuttingCTRL extends Controller
{


public function index(){


$address = Address::where('type','Tree Cutting')->get();

    return view('rps-database.forestry.permits.tree-cutting.tree-cutting',compact('address'));

}

public function client($address){


         $add = Address::where('address', $address)->firstOrFail();

        $client = TreeCuttingParent::where('address', $address)
            ->orderBy('name','asc')
            ->get();

        return view('rps-database.forestry.permits.tree-cutting.data.client',compact('add','client'));
    }


 public function add_client(Request $request, $address){


        $request->validate([
                'name' => 'nullable|string|max:255',
            ]);

            $add = Address::where('address', $address)->firstOrFail();

            TreeCuttingParent::create([
                'name' => $request->name,
                'address' => $add->address,
                'type' => 'Tree Cutting',
            ]);

            return redirect()->back()->with('success', 'Client added successfully.');

    }


    public function client_data($name){


        $client = TreeCuttingParent::where('id', $name)->firstOrFail();

        $table = TreeCutting::where('cutting_parent_id', $name)
            ->where('client_address', $client->address)
            ->get();

        $parent = $table->isEmpty() ? null : $table->first()->parent;

        return view('rps-database.forestry.permits.tree-cutting.data.data', compact('client', 'parent', 'table'));
    }



    public function store(Request $request,$id){


        $request->validate([

            'name_permitee'     => 'nullable|string|max:255',
            'location'          => 'nullable|string|max:255',
            'no_trees'          => 'nullable|string|max:255',
            'species'           => 'nullable|string|max:255',
            'approved_volume'   => 'nullable|string|max:255',
            'date_issuance'     => 'nullable|string|max:255',
            'expiration_date'   => 'nullable|string|max:255',
            'seed_requirements' => 'nullable|string|max:255',
            'document'          => 'nullable|file|mimes:pdf',



        ]);

        $parent = TreeCuttingParent::where('id',$id)->firstOrFail();


        $document = null;

        if($request->hasFile('document')){

            $file = $request->file('document');
            $document = $file->getClientOriginalName();
            $file->move(public_path('file'),$document);


        }

        TreeCutting::create([

            'name_permitee' => $request->name_permitee,
            'location' => $request->location,
            'no_trees' => $request->no_trees,
            'species' => $request->species,
            'approved_volume' => $request->approved_volume,
            'date_issuance' => $request->date_issuance,
            'expiration_date' => $request->expiration_date,
            'seed_requirements' => $request->seed_requirements,
            'client_address' => $parent->address,
            'permit_type' => 'Tree Cutting',
            'user_id' => Auth::id(),
            'cutting_parent_id' => $parent->id,
            'document' => $document,



        ]);


        return redirect()->back()->with('success','document added successfully');


    }


    public function edit(Request $request, $id){

         $client = TreeCutting::findOrFail($id);

        $validated = $request->validate([
            'name_permitee'     => 'nullable|string|max:255',
            'location'          => 'nullable|string|max:255',
            'no_trees'          => 'nullable|string|max:255',
            'species'           => 'nullable|string|max:255',
            'approved_volume'   => 'nullable|string|max:255',
            'date_issuance'     => 'nullable|string|max:255',
            'expiration_date'   => 'nullable|string|max:255',
            'seed_requirements' => 'nullable|string|max:255',
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


    $tree_cutting = TreeCutting::findOrFail($id);

    $tree_cutting->delete();

    return redirect()->back()->with('danger','An information has been deleted!');


    }


    }



