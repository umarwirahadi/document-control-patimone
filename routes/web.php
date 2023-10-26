<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.default');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/position',[App\Http\Controllers\PositionController::class,'index'])->name('position.index');
Route::get('/position/create',[App\Http\Controllers\PositionController::class,'create'])->name('position.create');
Route::post('/position',[App\Http\Controllers\PositionController::class,'store'])->name('position.store');
Route::get('/position/edit/{id}',[App\Http\Controllers\PositionController::class,'edit'])->name('position.edit');
Route::put('/position/update/{id}',[App\Http\Controllers\PositionController::class,'update'])->name('position.update');
Route::delete('/position/{id}',[App\Http\Controllers\PositionController::class,'destroy'])->name('position.destroy');
Route::get('/position/fetch',[App\Http\Controllers\PositionController::class,'fetch'])->name('position.fetch');


Route::get('/work-item',[App\Http\Controllers\WorkController::class,'index'])->name('work.index');
Route::get('/work-item/create',[App\Http\Controllers\WorkController::class,'create'])->name('work.create');
Route::post('/work-item',[App\Http\Controllers\WorkController::class,'store'])->name('work.store');
Route::get('/work-item/edit/{id}',[App\Http\Controllers\WorkController::class,'edit'])->name('work.edit');
Route::put('/work-item/{id}',[App\Http\Controllers\WorkController::class,'update'])->name('work.update');
Route::delete('/work-item/{id}',[App\Http\Controllers\WorkController::class,'destroy'])->name('work.destroy');
Route::get('/work-item/fetch',[App\Http\Controllers\WorkController::class,'fetch'])->name('work.fetch');
Route::get('/work-item/select',[App\Http\Controllers\WorkController::class,'find'])->name('work.select');


Route::get('/request-for-inspection',[App\Http\Controllers\RfiController::class,'index'])->name('rfi.index');
Route::get('/request-for-inspection/create',[App\Http\Controllers\RfiController::class,'index'])->name('rfi.create');
Route::post('/request-for-inspection',[App\Http\Controllers\RfiController::class,'index'])->name('rfi.store');
Route::get('/request-for-inspection/edit',[App\Http\Controllers\RfiController::class,'index'])->name('rfi.edit');
Route::put('/request-for-inspection/edit',[App\Http\Controllers\RfiController::class,'index'])->name('rfi.update');
Route::delete('/request-for-inspection',[App\Http\Controllers\RfiController::class,'index'])->name('rfi.destroy');

Route::get('/engineer',[App\Http\Controllers\EngineerController::class,'index'])->name('engineer.index');
Route::get('/engineer/create',[App\Http\Controllers\EngineerController::class,'create'])->name('engineer.create');
Route::post('/engineer',[App\Http\Controllers\EngineerController::class,'store'])->name('engineer.store');
Route::post('/engineer/photo',[App\Http\Controllers\EngineerController::class,'storePhoto'])->name('engineer.storephoto');
Route::get('/engineer/edit/{id}',[App\Http\Controllers\EngineerController::class,'edit'])->name('engineer.edit');
Route::get('/engineer/detail/{id}',[App\Http\Controllers\EngineerController::class,'show'])->name('engineer.show');
Route::put('/engineer/{id}',[App\Http\Controllers\EngineerController::class,'update'])->name('engineer.update');
Route::delete('/engineer/{id}',[App\Http\Controllers\EngineerController::class,'destroy'])->name('engineer.destroy');
Route::get('/engineer/fetch',[App\Http\Controllers\EngineerController::class,'fetch'])->name('engineer.fetch');

/* package */
Route::get('/package',[App\Http\Controllers\PackageController::class,'index'])->name('package.index');
Route::get('/package/create',[App\Http\Controllers\PackageController::class,'create'])->name('package.create');
Route::post('/package',[App\Http\Controllers\PackageController::class,'store'])->name('package.store');
Route::get('/package/{id}',[App\Http\Controllers\PackageController::class,'edit'])->name('package.edit');
Route::put('/package/{id}/update',[App\Http\Controllers\PackageController::class,'update'])->name('package.update');
Route::delete('/package/{id}',[App\Http\Controllers\PackageController::class,'destroy'])->name('package.destroy');
Route::get('/package-fetch',[App\Http\Controllers\PackageController::class,'fetch'])->name('package.fetch');

/* master item */
Route::get('/master-item',[App\Http\Controllers\MasterItemController::class,'index'])->name('item.index');
Route::get('/master-item/create',[App\Http\Controllers\MasterItemController::class,'create'])->name('item.create');
Route::post('/master-item',[App\Http\Controllers\MasterItemController::class,'store'])->name('item.store');
Route::get('/master-item/{id}',[App\Http\Controllers\MasterItemController::class,'edit'])->name('item.edit');
Route::put('/master-item/{id}/update',[App\Http\Controllers\MasterItemController::class,'update'])->name('item.update');
Route::delete('/master-item/{id}',[App\Http\Controllers\MasterItemController::class,'destroy'])->name('item.destroy');
Route::get('/master-item-fetch',[App\Http\Controllers\MasterItemController::class,'fetch'])->name('item.fetch');

/* document control */ 
/* outgoing letter */
Route::get('/incoming-letter',[App\Http\Controllers\IncomingLetterController::class,'index'])->name('incoming.index');
Route::get('/incoming/create',[App\Http\Controllers\IncomingLetterController::class,'create'])->name('incoming.create');
Route::get('/incoming-fetch-letter',[App\Http\Controllers\IncomingLetterController::class,'fetchLetter'])->name('incoming.fetch.letter');
Route::get('/incoming-fetch-transmittal',[App\Http\Controllers\IncomingLetterController::class,'fetchTransmittal'])->name('incoming.fetch.transmittal');


/* request for inspection */
Route::get('/request-for-inspection',[\App\Http\Controllers\RfiController::class,'index'])->name('rfi.index');
Route::get('/request-for-inspection/create/first',[\App\Http\Controllers\RfiController::class,'createFirst'])->name('rfi.createFirst');
Route::get('/request-for-inspection/create/{id}',[\App\Http\Controllers\RfiController::class,'create'])->name('rfi.create');
Route::get('/request-for-inspection/create-quality',[\App\Http\Controllers\RfiController::class,'createQuality'])->name('rfi.quality.create');
Route::get('/request-for-inspection/create-quantity',[\App\Http\Controllers\RfiController::class,'createQuantity'])->name('rfi.quanity.create');


/* contact */
Route::get('/contact',[App\Http\Controllers\ContactController::class,'index'])->name('contact.index');
Route::get('/contact/create',[App\Http\Controllers\ContactController::class,'create'])->name('contact.create');
Route::post('/contact',[App\Http\Controllers\ContactController::class,'store'])->name('contact.store');
Route::post('/contact/photo',[App\Http\Controllers\ContactController::class,'storePhoto'])->name('contact.storephoto');
Route::get('/contact/edit/{id}',[App\Http\Controllers\ContactController::class,'edit'])->name('contact.edit');
Route::get('/contact/detail/{id}',[App\Http\Controllers\ContactController::class,'show'])->name('contact.show');
Route::put('/contact/{id}',[App\Http\Controllers\ContactController::class,'update'])->name('contact.update');
Route::delete('/contact/{id}',[App\Http\Controllers\ContactController::class,'destroy'])->name('contact.destroy');
Route::get('/contact/fetch',[App\Http\Controllers\ContactController::class,'fetch'])->name('contact.fetch');

