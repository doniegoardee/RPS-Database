<?php

namespace App\Http\Controllers\RPS;

use App\Http\Controllers\Controller;
use App\Models\RPSDocs;
use App\Models\TypeTI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class DocsController extends Controller
{

public function add_doc(){

    $tenur = TypeTI::all();

return view('rps-database.add-doc',compact('tenur'));

}


public function store_doc(Request $request)
{
    // Log the incoming data
    Log::info('Incoming Request Data:', $request->all());


    $request->validate([
        'tracking_num' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'file' => 'required|file|mimes:pdf,doc,docx',
        'date' => 'required|date',
        'type' => 'required|string|in:Tenurial Instrument,Foreshore,API / PPI',
        'tenur_type_id' => 'nullable|exists:type_t_i_s,id',
        'remarks' => 'nullable|string',
    ]);

    $filePath = null;

    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = $fileName;

        if ($file->move(public_path('rpsdocs'), $fileName)) {
            Log::info('File uploaded successfully: ' . $filePath);
        } else {
            Log::error('File upload failed.');
        }
    }

    $tenurType = null;

    if ($request->type === 'Tenurial Instrument' && $request->tenur_type_id) {
        $tenurType = TypeTI::find($request->tenur_type_id)?->title;
        Log::info('Tenurial Type Found: ' . $tenurType);
    }

    $document = RPSDocs::create([
        'tracking_num' => $request->tracking_num,
        'subject' => $request->subject,
        'file' => $filePath,
        'date' => $request->date,
        'type' => $request->type,
        'tenur_type_id' => $request->tenur_type_id,
        'tenur_type' => $tenurType,
        'user_id' => Auth::id(),
        'remarks' => $request->remarks,
    ]);

    if ($document) {
        Log::info('Document created successfully.', $document->toArray());
        return redirect()->back()->with('success', 'Document added successfully.');
    } else {
        Log::error('Document creation failed.');
        return redirect()->back()->with('error', 'Document creation failed.');
    }
}


public function create()
{
    $tenurTypes = TypeTI::all();
    return view('rpsdocs.create', compact('tenurTypes'));
}




public function ppi(){


return view('rps-database.documents.ppi');


}

public function tenurial(){

    $title = TypeTI::all();

    return view('rps-database.documents.tenurial-instrument',compact('title'));
}



public function tenur_con($title)
{
    $tenur = TypeTI::where('title', $title)->firstOrFail();
    $type = $tenur->rpsDocs;

    return view('rps-database.documents.tenurial-doc.tenur-docs', compact('tenur', 'type'));
}


    public function for(){

        $for = RPSDocs::where('type','foreshore')->get();

        return view('rps-database.documents.foreshore',compact('for'));

        }



    public function all_doc(){

        $all = RPSDocs::all();

        return view('rps-database.manage-doc.all-doc',compact('all'));


    }
}
