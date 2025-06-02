<?php

namespace App\Http\Controllers\Forestry\Tenurial;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Forestry\Tenurial\TenurialInstrument;
use App\Models\Forestry\Tenurial\TIParent;
use App\Models\Forestry\Tenurial\TypeTI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TIController extends Controller
{
    public function tenurial(){

        $title = TypeTI::all();

        return view('rps-database.forestry.tenurial-instrument.tenurial-instrument',compact('title'));

    }



public function ti_folder($title)
{
    $type = TypeTI::where('title', $title)->first();
    $address = Address::where('type', $type->title)->get();

    $now = \Carbon\Carbon::now()->startOfDay();
    $currentYear = $now->year;

    foreach ($address as $addr) {
        $tenurials = TenurialInstrument::where('client_address', $addr->address)
            ->where('status', '!=', 'cancelled')
            ->get();

        foreach ($tenurials as $tenurial) {
            $issueDate = \Carbon\Carbon::parse($tenurial->issue_date)->startOfDay();
            $expiryDate = \Carbon\Carbon::parse($tenurial->expired_date)->startOfDay();

            $status = 'EXISTING';

            if ($now->gt($expiryDate)) {
                $status = 'EXPIRED';
            } elseif (
                $now->eq($issueDate) &&
                strtolower($tenurial->status) !== 'renewal' &&
                $issueDate->year !== $currentYear
            ) {
                $status = 'NEW';
            }

            if ($tenurial->status !== $status) {
                $tenurial->status = $status;
                $tenurial->save();
            }
        }
    }

    return view('rps-database.forestry.tenurial-instrument.index', compact('address', 'type'));
}



    public function ti_add_folder(Request $request,$title){

        $request->validate([

            'address' => 'nullable|string|max:255',
        ]);

        Address::Create([

            'address'=> $request->address,
            'type'=>$title,

        ]);

        return redirect()->back()->with('success','New folder created successfully.');


    }




   public function ti_client($title, $address)
{
    $add = Address::where('type', $title)->where('address', $address)->firstOrFail();

    $folder = TIParent::where('type', $title)->get();

    $new = TIParent::where('type', $title)->where('address', $address)
        ->where(function ($query) {
            $query->whereHas('TI', function ($q) {
                $q->where('status', 'new');
            })
            ->orDoesntHave('TI');
        })
        ->count();

    $existing = TIParent::where('address', $address)->where('type', $title)
        ->whereHas('TI', function ($q) {
            $q->where('status', 'existing');
        })
        ->count();

    $renewal = TIParent::where('address', $address)->where('type', $title)
        ->whereHas('TI', function ($q) {
            $q->where('status', 'renewal');
        })
        ->count();

    $expired = TIParent::where('address', $address)->where('type', $title)
        ->whereHas('TI', function ($q) {
            $q->where('status', 'expired');
        })
        ->count();

    $cancelled = TIParent::where('address', $address)->where('type', $title)
        ->whereHas('TI', function ($q) {
            $q->where('status', 'cancelled');
        })
        ->count();

    return view('rps-database.forestry.tenurial-instrument.status.tenurial-remarks',
     compact('add', 'folder', 'title', 'new','existing', 'renewal', 'expired', 'cancelled'));
}





    public function add_client_folder(Request $request, $type, $id)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
        ]);

        $add = Address::findOrFail($id);

        TIParent::create([
            'name' => $request->name,
            'address' => $add->address,
            'type' => $type,
        ]);

        return redirect()->back()->with('success', 'Client Folder Added Successfully!');
    }



   public function status_new($title, $address)
{
    $add = Address::where('address', $address)->firstOrFail();

    $client = TIParent::where('type', $title)
        ->where('address', $address)
        ->where(function ($query) {
            $query->whereHas('TI', function ($q) {
                $q->where('status', 'new');
            })
            ->orDoesntHave('TI');
        })
        ->with(['TI' => function ($q) {
            $q->where('status', 'new');
        }])
        ->orderBy('name', 'asc')
        ->get();

    return view('rps-database.forestry.tenurial-instrument.status.status-new', compact('add', 'client', 'title'));
}





    public function status_renewal($title, $address){


        $add = Address::where('address', $address)->firstOrFail();

        $client = TIParent::where('type', $title)->where('address',$address)
            ->where(function ($query) {
                $query->whereHas('TI', function ($q) {
                    $q->where('status', 'renewal');
                });
            })
            ->with(['TI' => function ($q) {
                $q->where('status', 'renewal');
            }])
            ->orderBy('name','asc')
            ->get();

        return view('rps-database.forestry.tenurial-instrument.status.status-renewal',compact('add','client','title'));

    }

    public function status_existing($title, $address){


        $add = Address::where('address', $address)->firstOrFail();

        $client = TIParent::where('type', $title)->where('address',$address)
            ->where(function ($query) {
                $query->whereHas('TI', function ($q) {
                    $q->where('status', 'existing');
                });
            })
            ->with(['TI' => function ($q) {
                $q->where('status', 'existing');
            }])
            ->orderBy('name','asc')
            ->get();

        return view('rps-database.forestry.tenurial-instrument.status.status-existing',compact('add','client','title'));

    }


    public function status_expired($title, $address){


        $add = Address::where('address', $address)->firstOrFail();

        $client = TIParent::where('type', $title)->where('address',$address)
            ->where(function ($query) {
                $query->whereHas('TI', function ($q) {
                    $q->where('status', 'expired');
                });

            })
            ->with(['TI' => function ($q) {
                $q->where('status', 'expired');
            }])
            ->orderBy('name','asc')
            ->get();



        return view('rps-database.forestry.tenurial-instrument.status.status-expired',compact('add','client','title'));
    }


    public function status_cancelled($title, $address){


        $add = Address::where('address', $address)->firstOrFail();

        $client = TIParent::where('type', $title)->where('address',$address)
            ->where(function ($query) {
                $query->whereHas('TI', function ($q) {
                    $q->where('status', 'cancelled');
                });
            })
            ->with(['TI' => function ($q) {
                $q->where('status', 'cancelled');
            }])
            ->orderBy('name','asc')
            ->get();

        return view('rps-database.forestry.tenurial-instrument.status.status-cancelled',compact('add','client','title'));

    }


    public function tenurial_new($title, $id)
{
    $client = TIParent::findOrFail($id);

    $data = TenurialInstrument::where('client_id', $client->id)
                              ->where('status', 'new')
                              ->get();

    return view('rps-database.forestry.tenurial-instrument.table.new', compact('client', 'data', 'title'));
}

    public function tenurial_existing($title, $id)
{
    $client = TIParent::findOrFail($id);

    $data = TenurialInstrument::where('client_id', $client->id)
                              ->where('status', 'existing')
                              ->get();

    return view('rps-database.forestry.tenurial-instrument.table.existing', compact('client', 'data', 'title'));
}


    public function tenurial_renewal($title,$id){

        $client = TIParent::find($id);

        $data = TenurialInstrument::where('client_id',$client->id)->where('status','renewal')->get();


        return view('rps-database.forestry.tenurial-instrument.table.renewal',compact('client','data','title'));

    }


    public function tenurial_expired($title,$id){

        $client = TIParent::find($id);

        $data = TenurialInstrument::where('client_id',$client->id)->where('status','EXPIRED')->get();


        return view('rps-database.forestry.tenurial-instrument.table.expired',compact('client','data','title'));

    }

     public function tenurial_cancelled($title, $id)
{
    $client = TIParent::findOrFail($id);

    $data = TenurialInstrument::where('client_id', $client->id)
                              ->where('status', 'cancelled')
                              ->get();

    return view('rps-database.forestry.tenurial-instrument.table.cancelled', compact('client', 'data', 'title'));
}


    public function store(Request $request, $id)
    {
        $request->validate([
            'name_lessee' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'issue_date' => 'nullable|date',
            'expired_date' => 'nullable|date',
            'document' => 'nullable|file|mimes:pdf,doc,docx,png,jpeg,jpg',
            'tenur_no' => 'nullable|string|max:255',
            'total_area' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'remarks' => 'nullable|string|max:255',
            'document'  => 'nullable|files|mimes:pdf',

        ]);

        $type = TIParent::findOrFail($id);

        $tenur_type = TypeTI::where('title', $type->type)->first();

        if (!$tenur_type) {
            return redirect()->back()->with('error', 'Invalid Tenur Type.');
        }

        $document = null;
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $document = $file->getClientOriginalName();
            $file->move(public_path('file'), $document);
        }

        TenurialInstrument::create([
            'name_lessee' => $request->name_lessee,
            'address' => $request->address,
            'issue_date' => $request->issue_date,
            'expired_date' => $request->expired_date,
            'document' => $document,
            'tenur_no' => $request->tenur_no,
            'total_area' => $request->total_area,
            'status' => $request->status,
            'remarks' => $request->remarks,
            'user_id' => Auth::id(),
            'tenur_type' => $type->type,
            'client_id' => $type->id,
            'client_address' => $type->address,
            'tenur_type_id' => $tenur_type->id,
            'document' => $request->document,
        ]);

        return redirect()->back()->with('success', 'Information added successfully');
    }



    public function update(Request $request, $id)
{
    $client = TenurialInstrument::findOrFail($id);

    $validated = $request->validate([
        'name_lessee'   => 'nullable|string|max:255',
        'address'       => 'nullable|string|max:255',
        'issue_date'    => 'nullable|date',
        'expired_date'  => 'nullable|date',
        'tenur_no'      => 'nullable|string|max:255',
        'total_area'    => 'nullable|string|max:255',
        'status'        => 'nullable|string|max:255',
        'remarks'       => 'nullable|string|max:255',
        'document'      => 'nullable|file|mimes:pdf',
    ]);

    if ($request->hasFile('document')) {
        $file = $request->file('document');
        $filename =$file->getClientOriginalName();
        $file->move(public_path('file'), $filename);
        $validated['document'] = $filename;
    }

    $client->update($validated);

    return redirect()->back()->with('success', 'Information updated successfully');
}



    public function delete($id){


        $client = TenurialInstrument::findOrFail($id);
        $client->delete();

        return redirect()->back()->with('danger','Information has been deleted!');


    }



}
