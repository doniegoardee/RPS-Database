<?php

namespace App\Http\Controllers\RPS\Forestry\Tenurial;

use \Log;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\TenurialInstrument;
use App\Models\TIParent;
use App\Models\TypeTI;
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

        return view('rps-database.forestry.tenurial-instrument.ti-folder', compact('address', 'type'));
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




public function ti_client($title, $address)
{
    $add = Address::where('address', $address)->firstOrFail();
    $folder = TIParent::where('type', $title)->get();

    return view('rps-database.forestry.tenurial-instrument.tenurial-doc.tenurial-client', compact('add', 'folder','title'));
}





    public function tenur_con($id)
{

    $client = TIParent::where('id', $id)->firstorFail();
    $data = TenurialInstrument::where('tenur_type_id', $id)->get();

    return view('rps-database.forestry.tenurial-instrument.tenurial-doc.tenur-docs', compact('client','data'));
}






public function add_tenurial($title){

    $tenurType = TypeTI::where('title', $title)->firstOrFail();

    return view('rps-database.forestry.tenurial-instrument.tenurial-doc.add-tenurial', compact('tenurType'));
}




public function store(Request $request , $id)
{

    $request->validate([

    'name_lessee' =>'nullable|string|max:255',
    'address' =>'nullable|string|max:255',
    'issue_date' =>'nullable|date|max:255',
    'expired_date' =>'nullable|date|max:255',
    'document' =>'nullable|file|mimes:pdf,doc,docx,png,jpeg,jpg',
    'tenur_no' =>'nullable|string|max:255',
    'total_area' =>'nullable|string|max:255',
    'status' =>'nullable|string|max:255',
    'remarks' =>'nullable|string|max:255',

    ]);

    $type = TIParent::where('id',$id)->firstOrFail();

    $document = null;

    if($request->HasFile('document')){

        $file = $request->file('document');
        $document = $file->getClientOriginalName();
        $file->move(public_path('file'),$document);

    }


    TenurialInstrument::Create([

    'name_lessee' => $request->name_lessee,
    'address' => $request->address,
    'issue_date' => $request->issue_date,
    'expired_date' => $request->expired_date,
    'document' => $document,
    'tenur_no' => $request->tenur_no,
    'total_area' => $request->total_area,
    'status' => $request->status,
    'remark' => $request->remarks,
    'user_id' => Auth::id(),
    'tenur_type' => $type->type,
    'tenur_type_id' => $type->id,

    ]);

    return redirect()->back()->with('success','Information added successfully');

}





public function search(Request $request)
{
    $query = $request->input('search');

    $documents = empty($query)
        ? TenurialInstrument::all()
        : TenurialInstrument::where('tracking_num', 'LIKE', "%$query%")
            ->orWhere('subject', 'LIKE', "%$query%")
            ->orWhere('remarks', 'LIKE', "%$query%")
            ->get();

    return view('rps-database.forestry.tenurial-instrument.tenurial-doc.search-table', compact('documents'));
}


}
