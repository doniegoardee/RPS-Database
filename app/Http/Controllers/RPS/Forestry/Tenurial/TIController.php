<?php

namespace App\Http\Controllers\RPS\Forestry\Tenurial;

use App\Http\Controllers\Controller;
use App\Models\TenurialInstrument;
use App\Models\TypeTI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TIController extends Controller
{
    public function tenurial(){

        $title = TypeTI::all();

        return view('rps-database.forestry.tenurial-instrument.tenurial-instrument',compact('title'));

    }

    public function tenur_con($title)
{
    $tenur = TypeTI::where('title', $title)->firstOrFail();
    $type = $tenur->TenurialInstrument;

    return view('rps-database.forestry.tenurial-instrument.tenurial-doc.tenur-docs', compact('tenur', 'type'));
}


public function add_tenurial($title){

    $tenurType = TypeTI::where('title', $title)->firstOrFail();

    return view('rps-database.forestry.tenurial-instrument.tenurial-doc.add-tenurial', compact('tenurType'));
}

public function store(Request $request)
{
    $request->validate([
        'tracking_num' => 'nullable|string|unique:tenurial_instruments,tracking_num',
        'subject' => 'nullable|string|max:255',
        'date' => 'nullable|date',
        'file' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
        'tenur_type_id' => 'required|exists:type_t_i_s,id',
        'tenur_type' => 'nullable|string',
        'remarks' => 'nullable|string',
    ], [
        'tracking_num.unique' => 'The tracking number already exists.',
    ]);

    $filePath = null;
    $tenurTypeTitle = TypeTI::find($request->tenur_type_id)?->title;

    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = $fileName;
        $file->move(public_path('file'), $fileName);
    }

    TenurialInstrument::create([
        'tracking_num' => $request->tracking_num,
        'subject' => $request->subject,
        'date' => $request->date,
        'file' => $filePath,
        'tenur_type_id' => $request->tenur_type_id,
        'tenur_type' => $tenurTypeTitle,
        'user_id' => Auth::id(),
        'remarks' => $request->remarks,
    ]);

    return redirect()->route('tenur.type', ['title' => $tenurTypeTitle])
        ->with('success', 'Tenurial Instrument created successfully.');
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
