<?php

namespace App\Http\Controllers\RPS\Lands;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Lands\Foreshore;
use App\Models\Lands\ForeshoreParents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForeshoreController extends Controller
{


public function index(){

    $address = Address::where('type','Foreshore')->get();

    return view('rps-database.lands.foreshore.index',compact('address'));

}

public function client($address){


         $add = Address::where('address', $address)->firstOrFail();

        $client = ForeshoreParents::where('address', $address)->where('type','Foreshore')
            ->orderBy('name','asc')
            ->get();

        return view('rps-database.lands.foreshore.data.client',compact('add','client'));
}


public function add_client(Request $request, $address){


        $request->validate([
                'name' => 'nullable|string|max:255',
            ]);

            $add = Address::where('address', $address)->firstOrFail();

            ForeshoreParents::create([
                'name' => $request->name,
                'address' => $add->address,
                'type' => 'Foreshore',
            ]);

            return redirect()->back()->with('success', 'Client added successfully.');

    }

public function client_data($name){


        $client = ForeshoreParents::where('id', $name)->firstOrFail();

        $table = Foreshore::where('client_id', $name)
            ->where('client_address', $client->address)
            ->get();

        $parent = $table->isEmpty() ? null : $table->first()->parent;

        return view('rps-database.lands.foreshore.data.data', compact('client', 'parent', 'table'));
    }



public function store(Request $request,$id,$add){


        $client = ForeshoreParents::find($id);


        $request->validate([

            'applicant'         => 'nullable|string|max:255',
            'location'          => 'nullable|string|max:255',
            'fla_no'            => 'nullable|string|max:255',
            'area'              => 'nullable|string|max:255',
            'remarks_status'    => 'nullable|string|max:255',
            'document'          => 'nullable|file|mime:pdf',

        ]);


        Foreshore::Create([

            'applicant' => $request->applicant,
            'location' => $request->location,
            'fla_no' => $request->fla_no,
            'area' => $request->area,
            'remarks_status' => $request->remarks_status,
            'lands_type' => 'Foreshore',
            'client_address' => $add,
            'client_id' => $client->id,
            'user_id' => Auth::id(),
            'document' => $request->document,

        ]);

        return redirect()->back()->with('success','Document added successfully!');

    }


    public function edit(Request $request, $id){

        $client = Foreshore::findOrFail($id);

        $validated = $request->validate([

            'applicant'         => 'nullable|string|max:255',
            'location'          => 'nullable|string|max:255',
            'fla_no'            => 'nullable|string|max:255',
            'area'              => 'nullable|string|max:255',
            'remarks_status'    => 'nullable|string|max:255',
            'document'          => 'nullable|file|mime:pdf',


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


        return redirect()->back()->with('primary','Data successfully updated');


    }

    public function delete($id){


        $client = Foreshore::findOrFail($id);
        $client->delete();

        return redirect()->back()->with('danger','Data has been deleted!');



    }

}
