<?php

namespace App\Http\Controllers\RPS\Forestry\Permits;

use App\Http\Controllers\Controller;
use App\Models\GSUP;
use App\Models\PermitList;
use App\Models\Permits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermitController extends Controller
{

public function permit(){

$title = Permits::all();

return view('rps-database.forestry.permits.permit',compact('title'));


}

public function permit_list($title)
{
    $permit = Permits::where('permit_title', $title)->firstOrFail();
    $permitLists = PermitList::where('permit_type', $title)->get();

    return view('rps-database.forestry.permits.permit-documents', compact('permit', 'permitLists'));
}

public function add_list($title)
{
    $permit = Permits::where('permit_title', $title)->firstOrFail();
    return view('rps-database.forestry.permits.add-document', compact('permit'));
}

public function store(Request $request)
{
    $request->validate([
        'app_no' => 'required|unique:permit_lists,app_no',
        'name' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'date' => 'required|date',
        'document' => 'nullable|file|mimes:pdf,jpg,png,jpeg',
        'permit_id' => 'required|exists:permits,id',
        'remarks' => 'nullable|string',
    ]);

    $permit = Permits::findOrFail($request->permit_id);

    if ($request->hasFile('document')) {
        $file = $request->file('document');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('file'), $filename);
        $documentPath = $filename;
    } else {
        $documentPath = null;
    }

    PermitList::create([
        'app_no' => $request->app_no,
        'name' => $request->name,
        'subject' => $request->subject,
        'date' => $request->date,
        'document' => $documentPath,
        'permit_id' => $permit->id,
        'permit_type' => $permit->permit_title,
        'user_id' => Auth::id(),
        'remarks' => $request->remarks,
    ]);

    return redirect()->back()->with('success', 'Permit List created successfully.');
}



public function gsup()
{
    $gsup = GSUP::all();
    return view('rps-database.forestry.permits.gsup', compact('gsup'));
}

public function add_gsup(){

    return view('rps-database.forestry.permits.gsup-add');

}


public function gsup_store(Request $request){


        $request->validate([
            'tracking_num' => 'required|unique:g_s_u_p_s,tracking_num',
            'subject' => 'required|string|max:255',
            'document' => 'nullable|file|mimes:pdf,doc,docx,jpg,png,jpeg',
            'file_year' => 'required|string|max:255',
            'remarks' => 'nullable|string',
        ]);

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('files'), $filename);
            $documentPath =  $filename;
        } else {
            $documentPath = null;
        }

        GSUP::create([
            'tracking_num' => $request->tracking_num,
            'subject' => $request->subject,
            'document' => $documentPath,
            'file_year' => $request->file_year,
            'remarks' => $request->remarks,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('gsup')->with('success', 'Document added successfully.');
 }

 public function gsupSearch(Request $request)
{
    $query = $request->input('search');

    $gsup = GSUP::where('tracking_num', 'LIKE', "%{$query}%")
                ->orWhere('subject', 'LIKE', "%{$query}%")
                ->orWhere('file_year', 'LIKE', "%{$query}%")
                ->get();

    $output = '';

    if ($gsup->count() > 0) {
        foreach ($gsup as $list) {
            $output .= '
                <tr>
                    <td>' . $list->id . '</td>
                    <td>' . $list->tracking_num . '</td>
                    <td>' . $list->subject . '</td>
                    <td>' . $list->file_year . '</td>
                    <td>' . ($list->document ? '<a href="' . url($list->document) . '" target="_blank">' . $list->document . '</a>' : 'No document uploaded') . '</td>
                    <td>' . ($list->remarks ?? 'No Remarks') . '</td>
                    <td></td>
                </tr>
            ';
        }
    } else {
        $output .= '
            <tr>
                <td colspan="7" class="text-center text-danger">No matching records found</td>
            </tr>
        ';
    }

    return response($output);
}



public function searchPermitList(Request $request)
{
    $query = $request->input('query');
    $permitTitle = $request->input('permit_title');

    $permitLists = PermitList::where('permit_type', $permitTitle)
        ->when($query, function ($q) use ($query) {
            $q->where(function ($subQuery) use ($query) {
                $subQuery->where('app_no', 'LIKE', "%{$query}%")
                    ->orWhere('name', 'LIKE', "%{$query}%")
                    ->orWhere('subject', 'LIKE', "%{$query}%")
                    ->orWhere('date', 'LIKE', "%{$query}%");
            });
        })
        ->get();

    return response()->json($permitLists);
}

}
