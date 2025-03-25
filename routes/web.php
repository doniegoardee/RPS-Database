<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RPS\DocsController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/ppi',[DocsController::class, 'ppi'])->name('ppi.doc');
    Route::get('/foreshore',[DocsController::class, 'for'])->name('for.doc');

    Route::get('/tenurial-instrument',[DocsController::class, 'tenurial'])->name('tenur.doc');
    Route::get('/tenurial-type/{id}',[DocsController::class, 'tenur_con'])->name('tenur.type');

    Route::get('/add-doc',[DocsController::class, 'add_doc'])->name('add.doc');
    Route::post('/store',[DocsController::class, 'store_doc'])->name('store.doc');



});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
