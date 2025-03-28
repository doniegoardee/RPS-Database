<?php

use App\Http\Controllers\ChartDocsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RPS\DocsController;
use App\Http\Controllers\RPS\Lands\Permits\PermitController;
use App\Http\Controllers\RPS\Lands\Tenurial\TIController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {


    Route::prefix('home')->group(function () {

        Route::get('/', [HomeController::class, 'index'])->name('dashboard');

        Route::get('/lands', [HomeController::class, 'land'])->name('lands');

        Route::get('/forestry', [HomeController::class, 'forestry'])->name('forestry');


    });

    Route::prefix('lands')->group(function () {



    });

    Route::prefix('tenurial')->group(function () {

        Route::get('/tenurial-instrument',[TIController::class, 'tenurial'])->name('tenur.doc');


    });

    Route::prefix('permit')->group(function () {

    Route::get('/permits',[PermitController::class, 'permit'])->name('permit.doc');
    Route::get('/permit-list/{title}', [PermitController::class, 'permit_list'])->name('permit.list');

    Route::get('/permits/add',[PermitController::class, 'add_list'])->name('add.list');



    });

    Route::get('/ppi',[DocsController::class, 'ppi'])->name('ppi.doc');
    Route::get('/foreshore',[DocsController::class, 'for'])->name('for.doc');

    Route::get('/tenurial-type/{title}', [DocsController::class, 'tenur_con'])->name('tenur.type');

    Route::get('/rps/chart', [ChartDocsController::class, 'chartData'])->name('docs.chart');

    Route::get('/add-documents',[DocsController::class, 'add_doc'])->name('add.doc');
    Route::post('/store',[DocsController::class, 'store_doc'])->name('store.doc');

    Route::get('/all-documents',[DocsController::class, 'all_doc'])->name('all.doc');


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
