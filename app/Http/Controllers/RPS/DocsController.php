<?php

namespace App\Http\Controllers\RPS;

use App\Http\Controllers\Controller;
use App\Models\RPSDocs;
use App\Models\TypeTI;
use Illuminate\Http\Request;

class DocsController extends Controller
{


public function add_doc(){

return view('rps-database.add-doc');

}

public function store_doc(Request $request)
{
    $request->validate([
        'tracking_num' => 'nullable|string|max:255',
        'subject' => 'nullable|string|max:255',
        'date' => 'required|date',
        'file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        'type' => 'required|string|max:255',
        'tenur_type' => 'nullable|string|max:255',
        'remarks' => 'nullable|string|max:255',
    ]);

    $filePath = null;
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $destinationPath = public_path('file');
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }
        $fileName =$file->getClientOriginalName();
        $file->move($destinationPath, $fileName);
        $filePath = $fileName;
    }

    RpsDocs::create([
        'tracking_num' => $request->tracking_num,
        'subject' => $request->subject,
        'date' => $request->date,
        'file' => $filePath,
        'type' => $request->type,
        'tenur_type' => $request->type === 'Tenurial Instrument' ? $request->tenur_type : null,
        'remarks' => $request->remarks,
    ]);

    return redirect()->route('add.doc')->with('success', 'Document created successfully!');
}


public function ppi(){


return view('rps-database.documents.ppi');


}

public function tenurial(){

    $title = TypeTI::all();

    return view('rps-database.documents.tenurial-instrument',compact('title'));
}



public function tenur_con($id){


    $tenur = TypeTI::findOrFail($id);
    $type = $tenur->rpsDocs;

    return view('rps-database.documents.tenurial-doc.tenur-docs',compact('tenur','type'));

    }


    public function for(){

        return view('rps-database.documents.foreshore');

        }
}
