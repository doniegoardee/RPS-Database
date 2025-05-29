<?php

namespace App\Http\Controllers\Lands;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Lands\Lands;
use App\Models\Lands\LandsParents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FPAController extends Controller
{


public function index(){

    $address = Address::where('type','FPA')->get();

    return view('rps-database.lands.fpa.index',compact('address'));

}

public function client($address){


         $add = Address::where('address', $address)->firstOrFail();

        $client = LandsParents::where('address', $address)->where('type','FPA')
            ->orderBy('name','asc')
            ->get();

        return view('rps-database.lands.fpa.data.client',compact('add','client'));
}


public function add_client(Request $request, $address){


        $request->validate([
                'name' => 'nullable|string|max:255',
            ]);

            $add = Address::where('address', $address)->firstOrFail();

            LandsParents::create([
                'name' => $request->name,
                'address' => $add->address,
                'type' => 'FPA',
            ]);

            return redirect()->back()->with('success', 'Client added successfully.');

    }


public function client_data($name){


        $client = LandsParents::where('id', $name)->firstOrFail();

        $table = Lands::where('client_id', $name)
            ->where('client_address', $client->address)
            ->get();

        $parent = $table->isEmpty() ? null : $table->first()->parent;

        return view('rps-database.lands.fpa.data.data', compact('client', 'parent', 'table'));
    }



public function store(Request $request,$id,$add){


        $client = LandsParents::find($id);


        $request->validate([

            'applicant'         => 'nullable|string|max:255',
            'applicant_no'      => 'nullable|string|max:255',
            'lot_no'            => 'nullable|string|max:255',
            'area'              => 'nullable|string|max:255',
            'date_approved'     => 'nullable|string|max:255',
            'location'          => 'nullable|string|max:255',
            'dpli_mi_si'        => 'nullable|string|max:255',
            'document'          => 'nullable|files|mimes:pdf',

        ]);


        Lands::Create([

            'applicant' => $request->applicant,
            'applicant_no' => $request->applicant_no,
            'lot_no' => $request->lot_no,
            'area' => $request->area,
            'date_approved' => $request->date_approved,
            'location' => $request->location,
            'dpli_mi_si' => $request->dpli_mi_si,
            'lands_type' => 'FPA',
            'client_address' => $add,
            'client_id' => $client->id,
            'user_id' => Auth::id(),
            'document' => $request->document,


        ]);

        return redirect()->back()->with('success','Document added successfully!');

    }


    public function edit(Request $request, $id){

        $client = Lands::findOrFail($id);

        $validated = $request->validate([

            'applicant' => 'nullable|string|max:255',
            'applicant_no' => 'nullable|string|max:255',
            'lot_no' => 'nullable|string|max:255',
            'area' => 'nullable|string|max:255',
            'date_approved' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'dpli_mi_si' => 'nullable|string|max:255',
            'document' => 'nullable|files|mimes:pdf',

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


        $client = Lands::findOrFail($id);
        $client->delete();

        return redirect()->back()->with('danger','Data has been deleted!');



    }
}
