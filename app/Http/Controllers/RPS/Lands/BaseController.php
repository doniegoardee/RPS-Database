<?php

namespace App\Http\Controllers\RPS\Lands;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Lands\Lands;
use App\Models\Lands\LandsParents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{



public function add_client(Request $request, $address,$type){


        $request->validate([
                'name' => 'nullable|string|max:255',
            ]);

            $add = Address::where('address', $address)->firstOrFail();

            LandsParents::create([
                'name' => $request->name,
                'address' => $add->address,
                'type' => $type,
            ]);

            return redirect()->back()->with('success', 'Client added successfully.');

    }


public function store(Request $request,$id,$add,$type){


        $client = LandsParents::find($id);


        $request->validate([

            'applicant'         => 'nullable|string|max:255',
            'lot_no'            => 'nullable|string|max:255',
            'area'              => 'nullable|string|max:255',
            'date_approved'     => 'nullable|string|max:255',
            'location'          => 'nullable|string|max:255',
            'dpli_mi_si'        => 'nullable|string|max:255',

        ]);


        Lands::Create([

            'applicant' => $request->applicant,
            'lot_no' => $request->lot_no,
            'area' => $request->area,
            'date_approved' => $request->date_approved,
            'location' => $request->location,
            'dpli_mi_si' => $request->dpli_mi_si,
            'lands_type' => $type,
            'client_address' => $add,
            'client_id' => $client->id,
            'user_id' => Auth::id(),

        ]);

        return redirect()->back()->with('success','Document added successfully!');

    }


    public function update(Request $request, $id){

        $client = Lands::findOrFail($id);

        $validated = $request->validate([

            'applicant' => 'nullable|string|max:255',
            'lot_no' => 'nullable|string|max:255',
            'area' => 'nullable|string|max:255',
            'date_approved' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'dpli_mi_si' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'remarks' => 'nullable|string|max:255',

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
