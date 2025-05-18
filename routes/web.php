<?php

use App\Http\Controllers\ChartDocsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RPS\AllDocumentsController;
use App\Http\Controllers\RPS\DocsController;
use App\Http\Controllers\RPS\Export\ExportController;
use App\Http\Controllers\RPS\Forestry\Permits\ChainsawCTRL;
use App\Http\Controllers\RPS\Forestry\Permits\LumberDealerCTRL;
use App\Http\Controllers\RPS\Forestry\Permits\PermitController;
use App\Http\Controllers\RPS\Forestry\Permits\PermitReportsController;

use App\Http\Controllers\RPS\Forestry\Tenurial\TenurialReportsController;
use App\Http\Controllers\RPS\Forestry\Tenurial\TIController;

use App\Http\Controllers\RPS\Imports\Forestry\TenurialImportsCTRL;
use App\Http\Controllers\RPS\Imports\Forestry\PermitsImportCTRL;
use App\Http\Controllers\RPS\Viewer\ViewerController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('dashboard')->middleware(['auth', 'role:admin'])->group(function () {


    Route::prefix('home')->group(function () {

        Route::get('/', [HomeController::class, 'index'])->name('dashboard');

        Route::get('/lands', [HomeController::class, 'land'])->name('lands');

        Route::get('/forestry', [HomeController::class, 'forestry'])->name('forestry');


    });

    Route::prefix('lands')->group(function () {



    });

    Route::prefix('tenurial')->group(function () {

        Route::get('ti-folder/{title}',[TIController::class, 'ti_folder'])->name('ti.folder');
        Route::post('add-ti/{title}',[TIController::class, 'ti_add_folder'])->name('ti-add.folder');
        Route::get('tenur-client/{title}/{add}', [TIController::class, 'ti_client'])->name('tenur.client');
        Route::post('add-client/folder/tenurial/{type}/{id}', [TIController::class, 'add_client_folder'])->name('add.client.ti');
        Route::get('/tenurial-type/{id}', [TIController::class, 'tenur_con'])->name('client.data');
        Route::post('/tenurial-instrument/add/{id}',[TIController::class, 'store'])->name('add.client.data');

        Route::get('/remark/client/new/{title}/{add}',[TIController::class, 'status_new'])->name('tenurial.new');
        Route::get('/remark/client/renewal/{title}/{add}',[TIController::class, 'status_renewal'])->name('tenurial.renewal');
        Route::get('/remark/client/expired/{title}/{add}',[TIController::class, 'status_expired'])->name('tenurial.expired');

        Route::get('folder/client/tenurial-new/{title}/{id}', [TIController::class, 'tenurial_new'])->name('ti.new');
        Route::get('folder/client/tenurial-renewal/{title}/{id}', [TIController::class, 'tenurial_renewal'])->name('ti.renewal');
        Route::get('folder/client/tenurial-expired/{title}/{id}', [TIController::class, 'tenurial_expired'])->name('ti.expired');

        Route::put('/client/tenurial/update/{id}',[TIController::class, 'update'])->name('tenurial.update');
        Route::delete('/client/tenurial/delete/{id}',[TIController::class, 'delete'])->name('tenurial.delete');

        Route::get('/tenurial-instrument',[TIController::class, 'tenurial'])->name('tenur.doc');

        route::get('view/tenurial/{id}',[AllDocumentsController::class, 'view_tenurial'])->name('view.tenurial');



        Route::get('/clients/search', [TIController::class, 'searchClients'])->name('clients.search');



    });



    Route::prefix('permit')->group(function () {

    Route::get('/permits',[PermitController::class, 'permit'])->name('permit.doc');
    Route::get('/permit-list/{title}', [PermitController::class, 'permit_list'])->name('permit.list');
    Route::get('/permits/add/{title}', [PermitController::class, 'add_list'])->name('add.list');
    Route::post('/permits/store', [PermitController::class, 'store'])->name('store.list');

    Route::get('/permits/add', [PermitController::class, 'add_gsup'])->name('add.gsup');
    Route::post('/permits/gsup/store', [PermitController::class, 'gsup_store'])->name('gsup.store');
    Route::get('/permits/gsup', [PermitController::class, 'gsup'])->name('gsup');
    Route::get('/permits/gsup/search', [PermitController::class, 'gsupSearch'])->name('gsup.search');



    Route::prefix('chainsaw')->group(function () {
        Route::get('/',[ChainsawCTRL::class, 'index'])->name('chainsaw');

        Route::get('folder/{add}', [ChainsawCTRL::class, 'folder'])->name('folder');
        Route::get('folder/client/{id}', [ChainsawCTRL::class, 'client'])->name('table.chainsaw');
        Route::get('folder/client/new/{id}', [ChainsawCTRL::class, 'table_new'])->name('table.new');
        Route::get('folder/client/renewal/{id}', [ChainsawCTRL::class, 'table_renewal'])->name('table.renewal');
        Route::get('folder/client/expired/{id}', [ChainsawCTRL::class, 'table_expired'])->name('table.expired');

        Route::post('/add-folder', [ChainsawCTRL::class, 'add_folder'])->name('folder.chainsaw');
        Route::post('/chainsaw/add-client/{address}', [ChainsawCTRL::class, 'add_client'])->name('client.chainsaw');

        Route::get('/remark/{add}',[ChainsawCTRL::class, 'remark'])->name('chainsaw.remark');
        Route::get('/remark/client/new/chainsaw/{add}',[ChainsawCTRL::class, 'remark_new'])->name('chainsaw.new');
        Route::get('/remark/client/renewal/chainsaw/{add}',[ChainsawCTRL::class, 'remark_renewal'])->name('chainsaw.renewal');
        Route::get('/remark/client/expired/chainsaw/{add}',[ChainsawCTRL::class, 'remark_expired'])->name('chainsaw.expired');

        Route::post('/client/add-info/{id}', [ChainsawCTRL::class, 'add_info'])->name('client.info');
        Route::delete('/client-info/{id}', [ChainsawCTRL::class, 'destroy'])->name('chainsaw.delete');
        Route::put('/edit-info/{id}', [ChainsawCTRL::class, 'edit'])->name('update.info');


    });


    Route::prefix('lumber-dealer')->group(function () {

        Route::get('/',[LumberDealerCTRL::class, 'index'])->name('lumber.dealer');

        Route::post('/add-folder/lumber-dealer', [LumberDealerCTRL::class, 'dealer_folder'])->name('ld.folder');

        Route::get('/remark/{add}',[LumberDealerCTRL::class, 'remark'])->name('ld.remark');
        Route::get('/remark/client/new/lumber-dealer/{add}',[LumberDealerCTRL::class, 'remark_new'])->name('ld.new');
        Route::get('/remark/client/renewal/lumber-dealer/{add}',[LumberDealerCTRL::class, 'remark_renewal'])->name('ld.renewal');
        Route::get('/remark/client/expired/lumber-dealer/{add}',[LumberDealerCTRL::class, 'remark_expired'])->name('ld.expired');

        Route::post('/add-client/{address}', [LumberDealerCTRL::class, 'add_client'])->name('client.ld');
        Route::get('/lumber-dealer/client/new/{id}', [LumberDealerCTRL::class, 'table_new'])->name('ld.table.new');
        Route::get('/lumber-dealer/client/renewal/{id}', [LumberDealerCTRL::class, 'table_renewal'])->name('ld.table.renewal');
        Route::get('/lumber-dealer/client/expired/{id}', [LumberDealerCTRL::class, 'table_expired'])->name('ld.table.expired');

        Route::post('/lumber-dealer/client/add-info/{id}', [LumberDealerCTRL::class, 'add_info'])->name('ld.client.info');
        Route::delete('/lumber-dealer/client-info/{id}', [LumberDealerCTRL::class, 'destroy'])->name('ld.delete');
        Route::put('/lumber-dealer/edit-info/{id}', [LumberDealerCTRL::class, 'edit'])->name('ld.update.info');




    });



    Route::prefix('tenurial-excel')->group(function () {


         Route::get('/export-tenurial-template', [ExportController::class, 'ExportTenurialTemplate'])->name('export.tenurial');
        Route::post('/import/tenurial-instrument/{address}/{title}', [TenurialImportsCTRL::class, 'importExcel'])->name('ti.import');

        Route::get('/tenurial/all-tenurial/generate-report',[TenurialReportsController::class, 'all_tenurial'])->name('tenurial.all');

        Route::get('/tenurial/tenurial-new/generate-report/{id}', [TenurialReportsController::class, 'tenurial_new'])->name('ti.new.report');
        Route::get('/tenurial/tenurial-renewal/generate-report/{id}', [TenurialReportsController::class, 'tenurial_renewal'])->name('ti.renewal.report');
        Route::get('/tenurial/tenurial-expired/generate-report/{id}', [TenurialReportsController::class, 'tenurial_expired'])->name('ti.expired.report');

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


        Route::prefix('lumber-dealer')->group(function () {

            Route::get('/export-template', [ExportController::class, 'ExportLumberDealerTemplate'])->name('ld.export.template');
            Route::post('import/client/{address}',[PermitsImportCTRl::class, 'lumber_dealer'])->name('import.ld');

            Route::get('/permits/lumber-dealer/remarks-new/generate-report',[PermitReportsController::class, 'lumber_dealer_remarks_new'])->name('ld.remarks.new');
            Route::get('/permits/lumber-dealer/remarks-renewal/generate-report',[PermitReportsController::class, 'lumber_dealer_remarks_renewal'])->name('ld.remarks.renewal');
            Route::get('/permits/lumber-dealer/remarks-expired/generate-report',[PermitReportsController::class, 'lumber_dealer_remarks_expired'])->name('ld.remarks.expired');



            Route::get('/permits/lumber-dealer/new/generate-report/{id}',[PermitReportsController::class, 'lumber_dealer_new'])->name('report.ld.new');
            Route::get('/permits/lumber-dealer/renewal/generate-report/{id}',[PermitReportsController::class, 'lumber_dealer_renewal'])->name('report.ld.renewal');
            Route::get('/permits/lumber-dealer/expired/generate-report/{id}',[PermitReportsController::class, 'lumber_dealer_expired'])->name('report.ld.expired');

        });

    });




    Route::get('/search-permit-list', [PermitController::class, 'searchPermitList'])->name('search.permitList');


    });

    Route::get('/ppi',[DocsController::class, 'ppi'])->name('ppi.doc');
    Route::get('/foreshore',[DocsController::class, 'for'])->name('for.doc');


    Route::get('/chart/tenurial', [ChartDocsController::class, 'index'])->name('chart.tenurial.index');
    Route::get('/chart/tenurial/data', [ChartDocsController::class, 'tenurialChart'])->name('chart.tenurial.data');


    Route::get('/add-documents',[DocsController::class, 'add_doc'])->name('add.doc');
    Route::post('/store',[DocsController::class, 'store_doc'])->name('store.doc');

    Route::get('/all-documents',[AllDocumentsController::class, 'index'])->name('all.doc');


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
