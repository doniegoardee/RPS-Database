<?php

use App\Exports\Forestry\Tenurial\TenurialExports;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AllDocument\ChartDocsController;
use App\Http\Controllers\AllDocument\AllDocumentsController;

use App\Http\Controllers\Forestry\Permits\ChainsawCTRL;
use App\Http\Controllers\Forestry\Permits\LumberDealerCTRL;
use App\Http\Controllers\Forestry\Permits\PermitController;
use App\Http\Controllers\Forestry\Permits\PermitReportsController;
use App\Http\Controllers\Forestry\Permits\SupplierCTRL;
use App\Http\Controllers\Forestry\Tenurial\TenurialReportsController;
use App\Http\Controllers\Forestry\Tenurial\TIController;

use App\Http\Controllers\Export\ExportController;
use App\Http\Controllers\Forestry\Permits\TFPLCTRL;
use App\Http\Controllers\Forestry\Permits\TreeCuttingCTRL;
use App\Http\Controllers\Forestry\Permits\WildlifeCTRL;
use App\Http\Controllers\Imports\Forestry\TenurialImportsCTRL;
use App\Http\Controllers\Imports\Forestry\PermitsImportCTRL;
use App\Http\Controllers\Imports\Lands\LandsImportController;
use App\Http\Controllers\Lands\ForeshoreController;
use App\Http\Controllers\Lands\FPAController;
use App\Http\Controllers\Lands\LandsReportController;
use App\Http\Controllers\Lands\RFPAController;
use App\Http\Controllers\Lands\SPController;
use App\Http\Controllers\Viewer\ViewerController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('PENRO')->middleware(['auth', 'role:admin'])->group(function () {




    Route::prefix('/RPS')->group(function () {

        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

        Route::get('/lands', [HomeController::class, 'land'])->name('lands');

        Route::get('/forestry', [HomeController::class, 'forestry'])->name('forestry');


    });

    Route::prefix('lands')->group(function () {



        Route::prefix('fpa')->group(function () {

            Route::get('/',[FPAController::class, 'index'])->name('FPA');

            Route::get('/{address}',[FPAController::class, 'client'])->name('fpa.client');

            Route::post('/add-client/{address}', [FPAController::class, 'add_client'])->name('add-client.fpa');
            Route::get('/client/{id}', [FPAController::class, 'client_data'])->name('fpa.client-data');

            Route::post('/store/{id}/{add}',[FPAController::class, 'store'])->name('fpa-data.store');
            Route::put('/edit/{id}', [FPAController::class, 'edit'])->name('update-data.fpa');
            Route::delete('/delete/{id}', [FPAController::class, 'delete'])->name('delete-data.fpa');

        });


         Route::prefix('rfpa')->group(function () {

            Route::get('/',[RFPAController::class, 'index'])->name('RFPA');

            Route::get('/{address}',[RFPAController::class, 'client'])->name('rfpa.client');

            Route::post('/add-client/{address}', [RFPAController::class, 'add_client'])->name('add-client.rfpa');
            Route::get('/client/{id}', [RFPAController::class, 'client_data'])->name('rfpa.client-data');

            Route::post('/store/{id}/{add}',[RFPAController::class, 'store'])->name('rfpa-data.store');
            Route::put('/edit/{id}', [RFPAController::class, 'edit'])->name('update-data.rfpa');
            Route::delete('/delete/{id}', [RFPAController::class, 'delete'])->name('delete-data.rfpa');

        });


        Route::prefix('sp')->group(function () {

            Route::get('/',[SPController::class, 'index'])->name('SP');

            Route::get('/{address}',[SPController::class, 'client'])->name('sp.client');

            Route::post('/add-client/{address}', [SPController::class, 'add_client'])->name('add-client.sp');
            Route::get('/client/{id}', [SPController::class, 'client_data'])->name('sp.client-data');

            Route::post('/store/{id}/{add}',[SPController::class, 'store'])->name('sp-data.store');
            Route::put('/edit/{id}', [SPController::class, 'edit'])->name('update-data.sp');
            Route::delete('/delete/{id}', [SPController::class, 'delete'])->name('delete-data.sp');

        });


        Route::prefix('foreshore')->group(function () {

            Route::get('/',[ForeshoreController::class, 'index'])->name('Foreshore');

            Route::get('/{address}',[ForeshoreController::class, 'client'])->name('foreshore.client');

            Route::post('/add-client/{address}', [ForeshoreController::class, 'add_client'])->name('add-client.foreshore');
            Route::get('/client/{id}', [ForeshoreController::class, 'client_data'])->name('foreshore.client-data');

            Route::post('/store/{id}/{add}',[ForeshoreController::class, 'store'])->name('foreshore-data.store');
            Route::put('/edit/{id}', [ForeshoreController::class, 'edit'])->name('update-data.foreshore');
            Route::delete('/delete/{id}', [ForeshoreController::class, 'delete'])->name('delete-data.foreshore');

        });


    });

    Route::prefix('tenurial')->group(function () {


        Route::get('/tenurial-instrument',[TIController::class, 'tenurial'])->name('tenur.doc');

        Route::get('ti-folder/{title}',[TIController::class, 'ti_folder'])->name('ti.folder');

        Route::get('tenur-client/{title}/{add}', [TIController::class, 'ti_client'])->name('tenur.client');
        Route::post('add-client/folder/tenurial/{type}/{id}', [TIController::class, 'add_client_folder'])->name('add.client.ti');
        Route::post('/tenurial-instrument/add/{id}',[TIController::class, 'store'])->name('add.client.data');

        Route::get('/remark/client/new/{title}/{add}',[TIController::class, 'status_new'])->name('tenurial.new');
        Route::get('/remark/client/existing/{title}/{add}',[TIController::class, 'status_existing'])->name('tenurial.existing');
        Route::get('/remark/client/renewal/{title}/{add}',[TIController::class, 'status_renewal'])->name('tenurial.renewal');
        Route::get('/remark/client/expired/{title}/{add}',[TIController::class, 'status_expired'])->name('tenurial.expired');
        Route::get('/remark/client/cancelled/{title}/{add}',[TIController::class, 'status_cancelled'])->name('tenurial.cancelled');

        Route::get('folder/client/tenurial-new/{title}/{id}', [TIController::class, 'tenurial_new'])->name('ti.new');
        Route::get('folder/client/tenurial-existing/{title}/{id}', [TIController::class, 'tenurial_existing'])->name('ti.existing');
        Route::get('folder/client/tenurial-renewal/{title}/{id}', [TIController::class, 'tenurial_renewal'])->name('ti.renewal');
        Route::get('folder/client/tenurial-expired/{title}/{id}', [TIController::class, 'tenurial_expired'])->name('ti.expired');
        Route::get('folder/client/tenurial-cancelled/{title}/{id}', [TIController::class, 'tenurial_cancelled'])->name('ti.cancelled');

        Route::put('/client/tenurial/update/{id}',[TIController::class, 'update'])->name('tenurial.update');
        Route::delete('/client/tenurial/delete/{id}',[TIController::class, 'delete'])->name('tenurial.delete');



        route::get('view/tenurial/{id}',[AllDocumentsController::class, 'view_tenurial'])->name('view.tenurial');


    });



    Route::prefix('permits')->group(function () {

    Route::get('/permits',[PermitController::class, 'permit'])->name('permit.doc');


    Route::prefix('chainsaw')->group(function () {

        Route::get('/',[ChainsawCTRL::class, 'index'])->name('chainsaw');

        Route::get('folder/{add}', [ChainsawCTRL::class, 'folder'])->name('folder');
        Route::get('folder/client/{id}', [ChainsawCTRL::class, 'client'])->name('table.chainsaw');
        Route::get('folder/client/new/{id}', [ChainsawCTRL::class, 'table_new'])->name('table.new');
        Route::get('folder/client/renewal/{id}', [ChainsawCTRL::class, 'table_renewal'])->name('table.renewal');
        // Route::get('folder/client/existing/{id}', [ChainsawCTRL::class, 'table_existing'])->name('table.existing');
        Route::get('folder/client/expired/{id}', [ChainsawCTRL::class, 'table_expired'])->name('table.expired');

        Route::post('/add-folder', [ChainsawCTRL::class, 'add_folder'])->name('folder.chainsaw');
        Route::post('/chainsaw/add-client/{address}', [ChainsawCTRL::class, 'add_client'])->name('client.chainsaw');

        Route::get('/remark/{add}',[ChainsawCTRL::class, 'remark'])->name('chainsaw.remark');
        Route::get('/remark/client/new/chainsaw/{add}',[ChainsawCTRL::class, 'remark_new'])->name('chainsaw.new');
        Route::get('/remark/client/renewal/chainsaw/{add}',[ChainsawCTRL::class, 'remark_renewal'])->name('chainsaw.renewal');
        // Route::get('/remark/client/existing/chainsaw/{add}',[ChainsawCTRL::class, 'remark_existing'])->name('chainsaw.existing');
        Route::get('/remark/client/expired/chainsaw/{add}',[ChainsawCTRL::class, 'remark_expired'])->name('chainsaw.expired');

        Route::post('/client/add-info/{id}', [ChainsawCTRL::class, 'add_info'])->name('client.info');
        Route::delete('/client-info/{id}', [ChainsawCTRL::class, 'destroy'])->name('chainsaw.delete');
        Route::put('/edit-info/{id}', [ChainsawCTRL::class, 'edit'])->name('update.info');


    });


    Route::prefix('tree-cutting')->group(function () {

        Route::get('/',[TreeCuttingCTRL::class,'index'])->name('tree.cutting');

        Route::get('/status/{add}',[TreeCuttingCTRL::class, 'client'])->name('tree-cutting.client');
        Route::post('/add-client/{address}', [TreeCuttingCTRL::class, 'add_client'])->name('add-client.tree-cutting');

        Route::get('/client/{id}', [TreeCuttingCTRL::class, 'client_data'])->name('tree-cutting.client-data');


        Route::post('/client/add-data/{id}', [TreeCuttingCTRL::class, 'store'])->name('add.tree-cutting');
        Route::put('/edit/tree-cutting/{id}', [TreeCuttingCTRL::class, 'edit'])->name('update.tree-cutting');
        Route::delete('/delete/tree-cutting/{id}', [TreeCuttingCTRL::class, 'destroy'])->name('delete-data.tree-cutting');


    });


    Route::prefix('lumber-dealer')->group(function () {

        Route::get('/',[LumberDealerCTRL::class, 'index'])->name('lumber.dealer');

        Route::get('/status/{add}',[LumberDealerCTRL::class, 'client'])->name('lumber-dealer.client');
        Route::post('/add-client/{address}', [LumberDealerCTRL::class, 'add_client'])->name('add-client.lumber-dealer');

        Route::get('/client/{id}', [LumberDealerCTRL::class, 'client_data'])->name('lumber-dealer.client-data');


        Route::post('/client/add-data/{id}', [LumberDealerCTRL::class, 'store'])->name('add-data.lumber-dealer');
        Route::put('/edit/tree-cutting/{id}', [LumberDealerCTRL::class, 'edit'])->name('update-data.lumber-dealer');
        Route::delete('/delete/tree-cutting/{id}', [LumberDealerCTRL::class, 'destroy'])->name('delete-data.lumber-dealer');



    });


    Route::prefix('lumber-supplier')->group(function () {

        Route::get('/',[SupplierCTRL::class, 'index'])->name('lumber.supplier');

        Route::get('/status/{add}',[SupplierCTRL::class, 'client'])->name('lumber-supplier.client');
        Route::post('/add-client/{address}', [SupplierCTRL::class, 'add_client'])->name('add-client.lumber-supplier');

        Route::get('/client/{id}', [SupplierCTRL::class, 'client_data'])->name('lumber-supplier.client-data');


        Route::post('/client/add-data/{id}', [SupplierCTRL::class, 'store'])->name('add-data.lumber-supplier');
        Route::put('/edit/tree-cutting/{id}', [SupplierCTRL::class, 'edit'])->name('update-data.lumber-supplier');
        Route::delete('/delete/tree-cutting/{id}', [SupplierCTRL::class, 'destroy'])->name('delete-data.lumber-supplier');

    });


    Route::prefix('wildlife')->group(function () {

        Route::get('/',[WildlifeCTRL::class,'index'])->name('wildlife');

        Route::get('/status/{add}',[WildlifeCTRL::class, 'client'])->name('wildlife.client');
        Route::post('/add-client/{address}', [WildlifeCTRL::class, 'add_client'])->name('add-client.wildlife');

        Route::get('/client/{id}', [WildlifeCTRL::class, 'client_data'])->name('wildlife.client-data');


        Route::post('/client/add-data/{id}', [WildlifeCTRL::class, 'store'])->name('add-data.wildlife');
        Route::put('/edit/tree-cutting/{id}', [WildlifeCTRL::class, 'edit'])->name('update-data.wildlife');
        Route::delete('/delete/tree-cutting/{id}', [WildlifeCTRL::class, 'destroy'])->name('delete-data.wildlife');


    });


    Route::prefix('tfpl')->group(function () {

        Route::get('/',[TFPLCTRL::class,'index'])->name('tfpl');

        Route::get('/status/{add}',[TFPLCTRL::class, 'client'])->name('tfpl.client');
        Route::post('/add-client/{address}', [TFPLCTRL::class, 'add_client'])->name('add-client.tfpl');

        Route::get('/client/{id}', [TFPLCTRL::class, 'client_data'])->name('tfpl.client-data');


        Route::post('/client/add-data/{id}', [TFPLCTRL::class, 'store'])->name('add-data.tfpl');
        Route::put('/edit/tree-cutting/{id}', [TFPLCTRL::class, 'edit'])->name('update-data.tfpl');
        Route::delete('/delete/tree-cutting/{id}', [TFPLCTRL::class, 'destroy'])->name('delete-data.tfpl');


    });




    Route::prefix('tenurial-report')->group(function () {


        Route::get('/export-tenurial-template', [ExportController::class, 'ExportTenurialTemplate'])->name('export.tenurial');

        Route::post('/import/tenurial-instrument/{address}/{title}', [TenurialImportsCTRL::class, 'importExcel'])->name('ti.import');

        Route::get('/tenurial/all-tenurial/generate-report',[TenurialReportsController::class, 'all_tenurial'])->name('tenurial.all');

        Route::get('all/{tenur_type}',[ExportController::class, 'exportPerType'])->name('ti.all');

        Route::get('/tenurial/tenurial-new/generate-report/{id}', [TenurialReportsController::class, 'tenurial_new'])->name('ti.new.report');
        Route::get('/tenurial/tenurial-existing/generate-report/{id}', [TenurialReportsController::class, 'tenurial_existing'])->name('ti.existing.report');
        Route::get('/tenurial/tenurial-renewal/generate-report/{id}', [TenurialReportsController::class, 'tenurial_renewal'])->name('ti.renewal.report');
        Route::get('/tenurial/tenurial-expired/generate-report/{id}', [TenurialReportsController::class, 'tenurial_expired'])->name('ti.expired.report');
        Route::get('/tenurial/tenurial-cancelled/generate-report/{id}', [TenurialReportsController::class , 'tenurial_cancelled'])->name('ti.cancelled.report');

        Route::get('status/new/{add}/{type}',[TenurialReportsController::class, 'status_new'])->name('pdf.status.new');
        Route::get('status/existing/{add}/{type}',[TenurialReportsController::class, 'status_existing'])->name('pdf.status.existing');
        Route::get('status/renewal/{add}/{type}',[TenurialReportsController::class, 'status_renewal'])->name('pdf.status.renewal');
        Route::get('status/expired/{add}/{type}',[TenurialReportsController::class, 'status_expired'])->name('pdf.status.expired');
        Route::get('status/cancelled/{add}/{type}',[TenurialReportsController::class, 'status_cancelled'])->name('pdf.status.cancelled');

        Route::get('/export/tenurial-new/{id}/{status}', [ExportController::class, 'exportTenurialNewExcel'])->name('excel-data.tenurial');

        Route::get('/export/tenurial/{address}/{status}/{type}', [ExportController::class, 'exportStatusExcel'])->name('excel-status.tenurial');


    });


    Route::prefix('permit-excel')->group(function () {

        Route::get('/permits/all-permits/generate-report',[PermitReportsController::class, 'all_permits'])->name('permit.all');


        Route::prefix('chainsaw')->group(function () {

            Route::get('/export-template', [ExportController::class, 'exportTemplate'])->name('export.template');
            Route::post('import/client/{address}',[PermitsImportCTRL::class, 'import_chainsaw'])->name('import.chainsaw');

            Route::get('/chainsaw/export', [ExportController::class, 'exportAllChainsawExcel'])->name('all-data.chainsaw-excel');

            Route::get('/permits/chainsaw-remarks-new/generate-report/{add}',[PermitReportsController::class, 'chainsaw_remarks_new'])->name('chainsaw.remarks.new');
            Route::get('/permits/chainsaw-remarks-renewal/generate-report/{add}',[PermitReportsController::class, 'chainsaw_remarks_renewal'])->name('chainsaw.remarks.renewal');
            Route::get('/permits/chainsaw-remarks-expired/generate-report/{add}',[PermitReportsController::class, 'chainsaw_remarks_expired'])->name('chainsaw.remarks.expired');


            Route::get('/permits/chainsaw-new/generate-report/{id}',[PermitReportsController::class, 'chainsaw_new'])->name('report.chainsaw.new');
            Route::get('/permits/chainsaw-renewal/generate-report/{id}',[PermitReportsController::class, 'chainsaw_renewal'])->name('report.chainsaw.renewal');
            Route::get('/permits/chainsaw-expired/generate-report/{id}',[PermitReportsController::class, 'chainsaw_expired'])->name('report.chainsaw.expired');


            Route::get('/chainsaw/export/{add}/{remarks}', [ExportController::class, 'exportChainsaw'])->name('status.chainsaw-excel');
            Route::get('/chainsaw/export/{id}', [ExportController::class, 'excelChainsawData'])->name('data.chainsaw-excel');


        });

        Route::prefix('tree-cutting')->group(function () {

            Route::get('/export-template/cutting', [ExportController::class, 'Tree_Cutting_Template'])->name('tree-cutting.template');

            Route::get('/export/cutting', [ExportController::class, 'exportTreeCuttingExcel'])->name('all-data.tree-cutting');

            Route::get('/export-data/{address}/cutting', [ExportController::class, 'tree_cutting_export'])->name('tree-cutting.address');

            Route::get('/client-tree-cutting/{id}/{add}/cutting', [ExportController::class, 'Tree_cutting_data'])->name('client-report.tree-cutting');

            Route::get('/pdf/tree-cutting/{add}',[PermitReportsController::class, 'treecutting_report'])->name('client.tree-cutting');

            Route::get('/{id}/{add}/tree-cutting',[PermitReportsController::class, 'treecutting_data'])->name('data-report.tree-cutting');


            Route::post('/import/{add}/cutting', [PermitsImportCTRL::class, 'importTreeCutting'])->name('tree-cutting.import');



        });





        Route::prefix('lumber-dealer')->group(function () {


            Route::get('/export-template/dealer', [ExportController::class, 'ExportLumberDealerTemplate'])->name('lumber-dealer.template');

            Route::get('/export/dealer', [ExportController::class, 'exportLumberDealerExcel'])->name('all-data.lumber-dealer');

            Route::get('/export-data/{address}/dealer', [ExportController::class, 'lumber_dealer_export'])->name('lumber-dealer.address');

            Route::get('/client-lumber-dealer/{id}/{add}/dealer', [ExportController::class, 'lumber_dealer_data'])->name('client-report.lumber-dealer');

            Route::get('/pdf/lumber-dealer/{add}',[PermitReportsController::class, 'lumberdealer_report'])->name('client.lumber-dealer');

            Route::get('/{id}/{add}/lumber-dealer',[PermitReportsController::class, 'lumberdealer_data'])->name('data-report.lumber-dealer');

            Route::post('/import/{add}/dealer', [PermitsImportCTRL::class, 'importLumberDealer'])->name('lumber-dealer.import');


        });


        Route::prefix('lumber-supplier')->group(function () {


            Route::get('/export-template/supplier', [ExportController::class, 'ExportLumberSupplierTemplate'])->name('lumber-supplier.template');

            Route::get('/export/supplier', [ExportController::class, 'exportLumberSupplierExcel'])->name('all-data.lumber-supplier');

            Route::get('/export-data/{address}/supplier', [ExportController::class, 'lumber_supplier_export'])->name('lumber-supplier.address');

            Route::get('/client-lumber-supplier/{id}/{add}/supplier', [ExportController::class, 'lumber_supplier_data'])->name('client-report.lumber-supplier');

            Route::get('/pdf/lumber-supplier/{add}',[PermitReportsController::class, 'lumbersupplier_report'])->name('client.lumber-supplier');

            Route::get('/{id}/{add}/lumber-supplier',[PermitReportsController::class, 'lumbersupplier_data'])->name('data-report.lumber-supplier');


            Route::post('/import/{add}/supplier', [PermitsImportCTRL::class, 'importLumberSupplier'])->name('lumber-supplier.import');


        });


        Route::prefix('wildlife')->group(function () {


            Route::get('/export-template/wildlife', [ExportController::class, 'ExportWildlifeTemplate'])->name('wildlife.template');

            Route::get('/export/wildlife', [ExportController::class, 'exportWildlifeExcel'])->name('all-data.wildlife');

            Route::get('/export-data/{address}/wildlife', [ExportController::class, 'wildlife_export'])->name('wildlife.address');

            Route::get('/client-wildlife/{id}/{add}/wildlife', [ExportController::class, 'wildlife_data'])->name('client-report.wildlife');

            Route::get('/pdf/wildlife/{add}',[PermitReportsController::class, 'wildlife_report'])->name('client.wildlife');

            Route::get('/{id}/{add}/wildlife',[PermitReportsController::class, 'wildlife_data'])->name('data-report.wildlife');


            Route::post('/import/{add}/wildlife', [PermitsImportCTRL::class, 'importWildlife'])->name('wildlife.import');


        });


        Route::prefix('transport-finish-product-lumber')->group(function () {


            Route::get('/export-template/tfpl', [ExportController::class, 'ExportTFPLTemplate'])->name('tfpl.template');

            Route::get('/export/tfpl', [ExportController::class, 'exportTFPLExcel'])->name('all-data.tfpl');

            Route::get('/export-data/{address}/tfpl', [ExportController::class, 'TFPL_export'])->name('tfpl.address');

            Route::get('/client-TFPL/{id}/{add}tfpl', [ExportController::class, 'TFPL_data'])->name('client-report.tfpl');

            Route::get('/pdf/tfpl/{add}',[PermitReportsController::class, 'tfpl_report'])->name('client.tfpl');

            Route::get('/{id}/{add}/tfpl',[PermitReportsController::class, 'tfpl_data'])->name('data-report.tfpl');


            Route::post('/import/{add}/tfpl', [PermitsImportCTRL::class, 'importTFPL'])->name('tfpl.import');


        });


    });




});


Route::prefix('lands-excel')->group(function () {


    Route::get('/export-lands-template/lands', [ExportController::class, 'Lands_Template'])->name('export.lands');

    Route::post('/lands/import/{address}/{lands_type}/lands', [LandsImportController::class, 'import'])->name('lands.import');

    Route::get('/report/{add}/{type}/lands',[LandsReportController::class, 'generate_report'])->name('generate-report.lands');

    Route::get('/{id}/{add}/lands',[LandsReportController::class, 'client_report'])->name('client-report.lands');


    Route::get('/export-lands/{address}/{type}/lands', [ExportController::class, 'Lands_export'])->name('lands-data.excel');

    Route::get('/client-report-excel/{id}/{add}/lands', [ExportController::class, 'client_report_excel'])->name('client-report.excel');

    Route::get('/all-lands/excel/{lands_type}/lands', [ExportController::class, 'all_Lands_data'])->name('all.lands-excel');


        Route::prefix('foreshore')->group(function () {


            Route::get('/export-template/foreshore', [ExportController::class, 'ExportForeshoreTemplate'])->name('foreshore.template');

            Route::get('/export/foreshore', [ExportController::class, 'exportForeshoreExcel'])->name('all-data.foreshore');

            Route::get('/export-data/{address}/foreshore', [ExportController::class, 'foreshore_export'])->name('foreshore.address');

            Route::get('/pdf/foreshore/{add}',[LandsReportController::class, 'foreshore_report'])->name('report-client.foreshore');

            Route::get('/{id}/{add}/foreshore',[LandsReportController::class, 'data_report'])->name('data-report.foreshore');


            Route::get('/client-foreshore/{id}/{add}/foreshore', [ExportController::class, 'foreshore_data'])->name('client-report.foreshore');


           Route::post('/lands/import/{address}/{lands_type}/foreshore', [LandsImportController::class, 'foreshoreimport'])->name('foreshore.import');



        });


});


    Route::prefix('All-Document')->group(function () {


        Route::get('/all-documents',[AllDocumentsController::class, 'index'])->name('all.doc');

        Route::get('/chart/tenurial', [ChartDocsController::class, 'index'])->name('chart.tenurial.index');
        Route::get('/charts/tenurial-data', [ChartDocsController::class, 'tenurialChart'])->name('chart.tenurial.data');
        Route::get('/charts/permit-data', [ChartDocsController::class, 'permitChart'])->name('chart.permit.data');
        Route::get('/chart/lands-type-data', [ChartDocsController::class, 'landsTypeData'])->name('chart.lands.type.data');


        Route::get('/documents/{type}/{id}', [AllDocumentsController::class, 'viewDocument'])->name('documents.view');


    });




});


Route::prefix('viewer')->middleware(['auth', 'role:user'])->group(function (){

    Route::get('/dashboard',[ViewerController::class, 'index'])->name('viewer.dashboard');


});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
