<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\RPS\AllDocument\ChartDocsController;
use App\Http\Controllers\RPS\AllDocument\AllDocumentsController;

use App\Http\Controllers\RPS\Forestry\Permits\ChainsawCTRL;
use App\Http\Controllers\RPS\Forestry\Permits\LumberDealerCTRL;
use App\Http\Controllers\RPS\Forestry\Permits\PermitController;
use App\Http\Controllers\RPS\Forestry\Permits\PermitReportsController;
use App\Http\Controllers\RPS\Forestry\Permits\SupplierCTRL;
use App\Http\Controllers\RPS\Forestry\Tenurial\TenurialReportsController;
use App\Http\Controllers\RPS\Forestry\Tenurial\TIController;

use App\Http\Controllers\RPS\Export\ExportController;
use App\Http\Controllers\RPS\Forestry\Permits\TFPLCTRL;
use App\Http\Controllers\RPS\Forestry\Permits\TreeCuttingCTRL;
use App\Http\Controllers\RPS\Forestry\Permits\WildlifeCTRL;
use App\Http\Controllers\RPS\Imports\Forestry\TenurialImportsCTRL;
use App\Http\Controllers\RPS\Imports\Forestry\PermitsImportCTRL;
use App\Http\Controllers\RPS\Lands\BaseController;
use App\Http\Controllers\RPS\Lands\ForeshoreController;
use App\Http\Controllers\RPS\Lands\FPAController;
use App\Http\Controllers\RPS\Lands\RFPAController;
use App\Http\Controllers\RPS\Lands\SPController;
use App\Http\Controllers\RPS\Viewer\ViewerController;
use App\Models\Forestry\Permits\TreeCutting;
use App\Models\Forestry\Permits\WildLife;

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
        Route::get('/tenurial/tenurial-renewal/generate-report/{id}', [TenurialReportsController::class, 'tenurial_renewal'])->name('ti.renewal.report');
        Route::get('/tenurial/tenurial-expired/generate-report/{id}', [TenurialReportsController::class, 'tenurial_expired'])->name('ti.expired.report');

        Route::get('status/new/{add}/{type}',[TenurialReportsController::class, 'status_new'])->name('pdf.status.new');

    });


    Route::prefix('permit-excel')->group(function () {

        Route::get('/permits/all-permits/generate-report',[PermitReportsController::class, 'all_permits'])->name('permit.all');


        Route::prefix('chainsaw')->group(function () {

            Route::get('/export-template', [ExportController::class, 'exportTemplate'])->name('export.template');
            Route::post('import/client/{address}',[PermitsImportCTRL::class, 'import_chainsaw'])->name('import.chainsaw');

            Route::get('/permits/chainsaw-remarks-new/generate-report',[PermitReportsController::class, 'chainsaw_remarks_new'])->name('chainsaw.remarks.new');
            Route::get('/permits/chainsaw-remarks-renewal/generate-report',[PermitReportsController::class, 'chainsaw_remarks_renewal'])->name('chainsaw.remarks.renewal');
            Route::get('/permits/chainsaw-remarks-expired/generate-report',[PermitReportsController::class, 'chainsaw_remarks_expired'])->name('chainsaw.remarks.expired');



            Route::get('/permits/chainsaw-new/generate-report/{id}',[PermitReportsController::class, 'chainsaw_new'])->name('report.chainsaw.new');
            Route::get('/permits/chainsaw-renewal/generate-report/{id}',[PermitReportsController::class, 'chainsaw_renewal'])->name('report.chainsaw.renewal');
            Route::get('/permits/chainsaw-expired/generate-report/{id}',[PermitReportsController::class, 'chainsaw_expired'])->name('report.chainsaw.expired');

        });


        Route::prefix('lumber-dealer-pdf')->group(function () {

            Route::get('/export-template', [ExportController::class, 'ExportLumberDealerTemplate'])->name('ld.export.template');
            Route::post('import/client/{address}',[PermitsImportCTRl::class, 'lumber_dealer'])->name('import.ld');

        });



    });




    Route::get('/search-permit-list', [PermitController::class, 'searchPermitList'])->name('search.permitList');


    });


    Route::prefix('lands-excel')->group(function () {


        Route::get('/export-tenurial-template', [ExportController::class, 'ExportTenurialTemplate'])->name('export.lands');
        Route::post('/import/tenurial-instrument/{address}/{title}', [TenurialImportsCTRL::class, 'importExcel'])->name('ti.import');

        Route::get('/tenurial/all-tenurial/generate-report',[TenurialReportsController::class, 'all_tenurial'])->name('tenurial.all');


    });




    Route::prefix('All-Document')->group(function () {


        Route::get('/all-documents',[AllDocumentsController::class, 'index'])->name('all.doc');

        Route::get('/chart/tenurial', [ChartDocsController::class, 'index'])->name('chart.tenurial.index');
        Route::get('/chart/tenurial/data', [ChartDocsController::class, 'tenurialChart'])->name('chart.tenurial.data');


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
