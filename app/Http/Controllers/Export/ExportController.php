<?php

namespace App\Http\Controllers\Export;

use App\Exports\Lands\ClientData;
use App\Exports\Forestry\Permits\Chainsaw\AllChainsawData;
use App\Exports\Forestry\Permits\Chainsaw\Chainsaw;
use App\Exports\Forestry\Permits\Chainsaw\ChainsawData;
use App\Exports\Forestry\Permits\Chainsaw\ChainsawStatus;
use App\Exports\Forestry\Permits\LumberDealer\LumberDealerAddress;
use App\Exports\Forestry\Permits\LumberDealer\LumberDealerAll;
use App\Exports\Forestry\Permits\LumberDealer\LumberDealerData;
use App\Exports\Forestry\Permits\LumberDealer\LumberDealerTemplate;
use App\Exports\Forestry\Permits\LumberSupplier\LumberSupplierAddress;
use App\Exports\Forestry\Permits\LumberSupplier\LumberSupplierAll;
use App\Exports\Forestry\Permits\LumberSupplier\LumberSupplierData;
use App\Exports\Forestry\Permits\LumberSupplier\LumberSupplierTemplate;
use App\Exports\Forestry\Permits\TFPL\TFPLAddress;
use App\Exports\Forestry\Permits\TFPL\TFPLAll;
use App\Exports\Forestry\Permits\TFPL\TFPLData;
use App\Exports\Forestry\Permits\TFPL\TFPLTemplate;
use App\Exports\Forestry\Tenurial\ExportStatus;
use App\Exports\Forestry\Permits\TreeCutting\TreeCuttingAddress;
use App\Exports\Forestry\Permits\TreeCutting\TreeCuttingAll;
use App\Exports\Forestry\Permits\TreeCutting\TreeCuttingData;
use App\Exports\Forestry\Permits\TreeCutting\TreeCuttingTemplate;
use App\Exports\Forestry\Permits\Wildlife\WildlifeAddress;
use App\Exports\Forestry\Permits\Wildlife\WildlifeAll;
use App\Exports\Forestry\Permits\Wildlife\WildlifeData;
use App\Exports\Forestry\Permits\Wildlife\WildlifeTemplate;
use App\Exports\Forestry\Tenurial\ExportClientData;
use App\Exports\Forestry\Tenurial\TenurialExports;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Forestry\Tenurial\ExportData;
use App\Exports\Lands\AllLandsExport;
use App\Exports\Lands\Foreshore\ForeshoreAddress;
use App\Exports\Lands\Foreshore\ForeshoreAll;
use App\Exports\Lands\Foreshore\ForeshoreData;
use App\Exports\Lands\Foreshore\ForeshoreTemplate;
use App\Exports\Lands\LandData;
use App\Exports\Lands\LandsTemplate;
use App\Models\Forestry\Permits\LumDealer;
use App\Models\Forestry\Permits\Supplier;
use App\Models\Forestry\Permits\TFPL;
use App\Models\Forestry\Permits\TreeCutting;
use App\Models\Forestry\Permits\WildLife;
use App\Models\Forestry\Tenurial\TenurialInstrument;
use App\Models\Forestry\Tenurial\TIParent;
use App\Models\Lands\Foreshore;
use App\Models\Lands\Lands;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function exportTemplate(){
        return Excel::download(new Chainsaw, 'chainsaw-template.xlsx');
    }

    public function ExportTenurialTemplate(){
        return Excel::download(new TenurialExports,'tenurial-template.xlsx');
    }

    public function Lands_Template(){
        return Excel::download(new LandsTemplate,'lands-template.xlsx');
    }

    public function Tree_Cutting_Template(){
        return Excel::download(new TreeCuttingTemplate,'tree-cutting-template.xlsx');
    }

    public function ExportLumberDealerTemplate(){
        return Excel::download(new LumberDealerTemplate,'lumber-dealer-template.xlsx');
    }

    public function ExportLumberSupplierTemplate(){
        return Excel::download(new LumberSupplierTemplate,'lumber-supplier-template.xlsx');
    }

    public function ExportWildlifeTemplate(){
        return Excel::download(new WildlifeTemplate,'wildlife-template.xlsx');
    }

    public function ExportTFPLTemplate(){
        return Excel::download(new TFPLTemplate,'transport-product-template.xlsx');
    }

    public function ExportForeshoreTemplate(){
        return Excel::download(new ForeshoreTemplate,'foreshore-template.xlsx');
    }



//Lands


    public function all_Lands_data($lands_type)
    {
        $exists = Lands::where('lands_type', $lands_type)->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No data found for the selected land type.');
        }

        return Excel::download(new AllLandsExport($lands_type), 'lands_report.xlsx');
    }

    public function Lands_export($address, $type)
    {
        $exists = Lands::where('client_address', $address)
                       ->where('lands_type', $type)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No data found for the selected client address and land type.');
        }

        return Excel::download(new LandData($address, $type), "lands_{$type}_report.xlsx");
    }

    public function client_report_excel($id, $add)
    {
        $exists = Lands::where('client_address', $add)
                       ->where('user_id', $id)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No client data found for the selected parameters.');
        }

        return Excel::download(new ClientData($id, $add), 'client_report.xlsx');
    }

//Foreshore

public function exportForeshoreExcel()
{
    $hasData = Foreshore::exists();

    if (!$hasData) {
        return redirect()->back()->with('error', 'No Foreshore data found to export.');
    }

    $allForeshores = Foreshore::all();

    return Excel::download(new ForeshoreAll($allForeshores), 'Foreshore_Report.xlsx');
}


    public function foreshore_export($address)
    {
        $exists = Foreshore::where('client_address', $address)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No data found for the selected client address and foreshore.');
        }

        return Excel::download(new ForeshoreAddress($address), "Foreshore-{$address}.xlsx");
    }


     public function foreshore_data($id, $add)
    {
        $exists = Foreshore::where('client_address', $add)
                       ->where('client_id', $id)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No client data found for the selected parameters.');
        }

        return Excel::download(new ForeshoreData($id, $add), 'client_report.xlsx');
    }




//Chainsaw

    public function exportAllChainsawExcel()
    {
        $chainsaws = \App\Models\Forestry\Permits\Chainsaw::all();

        if ($chainsaws->isEmpty()) {
            return redirect()->back()->with('error', 'No chainsaw data found to export.');
        }

        return Excel::download(new AllChainsawData($chainsaws), 'Chainsaw_Report.xlsx');
    }

    public function exportChainsaw($clientAddress, $remarks)
    {
        $exists = \App\Models\Forestry\Permits\Chainsaw::where('client_address', $clientAddress)
                                                      ->where('remarks', $remarks)
                                                      ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No chainsaw data found for the specified client address and remarks.');
        }

        return Excel::download(new ChainsawStatus($clientAddress, $remarks), "chainsaw_{$remarks}_report.xlsx");
    }

    public function excelChainsawData($id)
    {
        $exists = \App\Models\Forestry\Permits\Chainsaw::where('id', $id)->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No chainsaw data found for the given ID.');
        }

        return Excel::download(new ChainsawData($id), 'chainsaw_data.xlsx');
    }

    public function exportStatusExcel($address, $status, $type)
    {
        $exists = \App\Models\Forestry\Tenurial\TenurialInstrument::where('client_address', $address)
                                                                   ->where('status', $status)
                                                                   ->where('tenur_type', $type)
                                                                   ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No tenurial data found for the selected address, status, and type.');
        }

        return Excel::download(
            new ExportStatus($address, $status, $type),
            "{$status}_{$type}_Export.xlsx"
        );
    }


    //Tree Cutting

public function exportTreeCuttingExcel()
{
    $hasData = TreeCutting::exists();

    if (!$hasData) {
        return redirect()->back()->with('error', 'No tree cutting data found to export.');
    }

    $allTreeCuttings = TreeCutting::all();

    return Excel::download(new TreeCuttingAll($allTreeCuttings), 'Tree_Cutting_Report.xlsx');
}


    public function tree_cutting_export($address)
    {
        $exists = TreeCutting::where('client_address', $address)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No data found for the selected client address and tree cutting.');
        }

        return Excel::download(new TreeCuttingAddress($address), "tree-cutting-{$address}.xlsx");
    }


     public function Tree_Cutting_data($id, $add)
    {
        $exists = TreeCutting::where('client_address', $add)
                       ->where('cutting_parent_id', $id)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No client data found for the selected parameters.');
        }

        return Excel::download(new TreeCuttingData($id, $add), 'client_report.xlsx');
    }


    //Lumber Dealer

    public function exportLumberDealerExcel()
{
    $hasData = LumDealer::exists();

    if (!$hasData) {
        return redirect()->back()->with('error', 'No lumber dealer data found to export.');
    }

    $allLumberdealer = LumDealer::all();

    return Excel::download(new LumberDealerAll($allLumberdealer), 'Lumber_Dealer_Report.xlsx');
}


    public function lumber_dealer_export($address)
    {
        $exists = LumDealer::where('client_address', $address)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No data found for the selected client address and lumber dealer.');
        }

        return Excel::download(new LumberDealerAddress($address), "lumber-dealer-{$address}.xlsx");
    }


         public function lumber_dealer_data($id, $add)
    {
        $exists = LumDealer::where('client_address', $add)
                       ->where('dealer_parent_id', $id)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No client data found for the selected parameters.');
        }

        return Excel::download(new LumberDealerData($id, $add), 'lumber-dealer-report.xlsx');
    }


    //Lumber SUpplier

    public function exportLumberSupplierExcel(){

    $hasData = Supplier::exists();

    if (!$hasData) {
        return redirect()->back()->with('error', 'No lumber supplier data found to export.');
    }

    $allLumbersupplier = Supplier::all();

    return Excel::download(new LumberSupplierAll($allLumbersupplier), 'Lumber_Supplier_Report.xlsx');
}


    public function lumber_supplier_export($address)
    {
        $exists = Supplier::where('client_address', $address)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No data found for the selected client address and lumber supplier.');
        }

        return Excel::download(new LumberSupplierAddress($address), "lumber-supplier-{$address}.xlsx");
    }


         public function lumber_supplier_data($id, $add)
    {
        $exists = Supplier::where('client_address', $add)
                       ->where('supplier_parent_id', $id)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No client data found for the selected parameters.');
        }

        return Excel::download(new LumberSupplierData($id, $add), 'lumber-supplier-report.xlsx');
    }

    //Wildlife

    public function exportWildlifeExcel(){

    $hasData = WildLife::exists();

    if (!$hasData) {
        return redirect()->back()->with('error', 'No wildlife data found to export.');
    }

    $allwildlife = WildLife::all();

    return Excel::download(new WildlifeAll($allwildlife), 'Wildlife_Report.xlsx');
}


    public function wildlife_export($address)
    {
        $exists = WildLife::where('client_address', $address)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No data found for the selected client address and Wildlife.');
        }

        return Excel::download(new WildlifeAddress($address), "wildlife-{$address}.xlsx");
    }


         public function wildlife_data($id, $add)
    {
        $exists = WildLife::where('client_address', $add)
                       ->where('wildlife_parent_id', $id)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No client data found for the selected parameters.');
        }

        return Excel::download(new WildlifeData($id, $add), 'wildlife-report.xlsx');
    }


    //Transport Finish Product Lumber

    public function exportTFPLExcel(){

    $hasData = TFPL::exists();

    if (!$hasData) {
        return redirect()->back()->with('error', 'No TFPL data found to export.');
    }

    $allTFPL = TFPL::all();

    return Excel::download(new TFPLAll($allTFPL), 'TFPL_Report.xlsx');
}


    public function TFPL_export($address)
    {
        $exists = TFPL::where('client_address', $address)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No data found for the selected client address and Transport Finish Product Lumber.');
        }

        return Excel::download(new TFPLAddress($address), "tfpl-{$address}.xlsx");
    }


         public function TFPL_data($id, $add)
    {
        $exists = TFPL::where('client_address', $add)
                       ->where('tfpl_parent_id', $id)
                       ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No client data found for the selected parameters.');
        }

        return Excel::download(new TFPLData ($id, $add), 'TFPL-report.xlsx');
    }


    //Tenurial Instrument

    public function exportTenurialNewExcel($id, $status)
    {
        $exists = \App\Models\Forestry\Tenurial\TenurialInstrument::where('client_id', $id)
                                                                   ->where('status', $status)
                                                                   ->exists();

        if (!$exists) {
            return redirect()->back()->with('error', 'No tenurial data found for the selected ID and status.');
        }

        return Excel::download(new ExportClientData($id, $status), "Tenurial_{$status}_Export.xlsx");
    }



    public function exportPerType($tenur_type)
    {
        $type = $tenur_type;

        if (!$type) {
            return redirect()->back()->withErrors(['Tenurial type is required.']);
        }

        $fileName = "Tenurial_Instruments_{$type}.xlsx";

        $tiParents = TIParent::with(['ti_address', 'TI' => function ($q) use ($type) {
            $q->whereHas('tenurType', fn($q2) => $q2->where('title', $type));
        }])->get();

        if ($tiParents->isEmpty() || $tiParents->every(fn($parent) => $parent->TI->isEmpty())) {
            return redirect()->back()->withErrors(['No data found for this tenurial type.']);
        }

        return Excel::download(new ExportData($type, $tiParents), $fileName);
    }
}
