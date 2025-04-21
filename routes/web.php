<?php

use App\Http\Controllers\ChartDocsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RPS\DocsController;
use App\Http\Controllers\RPS\Export\ExportController;
use App\Http\Controllers\RPS\Forestry\Permits\ChainsawCTRL;
use App\Http\Controllers\RPS\Forestry\Permits\PermitController;
use App\Http\Controllers\RPS\Forestry\Tenurial\TIController;
use App\Http\Controllers\RPS\Imports\Foresty\ChainsawImport;
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


        Route::get('/tenurial-instrument',[TIController::class, 'tenurial'])->name('tenur.doc');



        Route::get('/tenurial-instruments/search', [TIController::class, 'search'])->name('tenurial.search');


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
        Route::get('/',[PermitController::class, 'chainsaw'])->name('chainsaw');

        Route::get('folder/{add}', [ChainsawCTRL::class, 'folder'])->name('folder');
        Route::get('folder/client/{id}', [ChainsawCTRL::class, 'client'])->name('table.chainsaw');

        Route::post('/add-folder', [ChainsawCTRL::class, 'add_folder'])->name('folder.chainsaw');
        Route::post('/chainsaw/add-client/{address}', [ChainsawCTRL::class, 'add_client'])->name('client.chainsaw');

        Route::post('/client/add-info/{id}', [ChainsawCTRL::class, 'add_info'])->name('client.info');
        Route::delete('/client-info/{id}', [ChainsawCTRL::class, 'destroy'])->name('chainsaw.delete');
        Route::put('/edit-info/{id}', [ChainsawCTRL::class, 'edit'])->name('update.info');

        Route::get('/import/chainsaw',[ChainsawImport::class, 'index'])->name('import');
        Route::post('/chainsaw/import', [ChainsawImport::class, 'import'])->name('chainsaw.import');
        Route::post('/chainsaw/save', [ChainsawImport::class, 'save'])->name('chainsaw.save');


    });

    Route::prefix('excel')->group(function () {

        Route::get('/export-template', [ExportController::class, 'exportTemplate'])->name('export.template');
        Route::post('import/client/{address}',[ChainsawImport::class, 'import_chainsaw'])->name('import.chainsaw');

    });



    Route::get('/search-permit-list', [PermitController::class, 'searchPermitList'])->name('search.permitList');


    });

    Route::get('/ppi',[DocsController::class, 'ppi'])->name('ppi.doc');
    Route::get('/foreshore',[DocsController::class, 'for'])->name('for.doc');


    Route::get('/rps/chart', [ChartDocsController::class, 'chartData'])->name('docs.chart');

    Route::get('/add-documents',[DocsController::class, 'add_doc'])->name('add.doc');
    Route::post('/store',[DocsController::class, 'store_doc'])->name('store.doc');

    Route::get('/all-documents',[HomeController::class, 'all_doc'])->name('all.doc');


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
