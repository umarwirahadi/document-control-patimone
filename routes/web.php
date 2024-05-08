<?php

use Illuminate\Support\Facades\Auth;
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



/* OAuth */
/* Route::get('/auth/redirect',function(){
    return Socialite::driver('github')->redirect();
})->name('oauth.login');

Route::get('/auth/callback',function(){

}); */

Route::get('/', function () {
    return view('layouts.default');
})->middleware('auth');

Auth::routes();

Route::get('/users',[App\Http\Controllers\UserController::class,'index'] )->name('user.index');
Route::get('/user/create',[App\Http\Controllers\UserController::class,'create'] )->name('user.create');
Route::post('/user',[App\Http\Controllers\UserController::class,'store'])->name('user.store');
Route::get('/user/{id}/edit',[App\Http\Controllers\UserController::class,'edit'])->name('user.edit');
Route::put('/user/{id}',[App\Http\Controllers\UserController::class,'update'])->name('user.update');
Route::delete('/user/{id}',[App\Http\Controllers\UserController::class,'destroy'])->name('user.destroy');
Route::get('/users/fetch',[App\Http\Controllers\UserController::class,'fetch'] )->name('user.fetch');

Route::get('/user-assign/{id}',[App\Http\Controllers\UserController::class,'assign'])->name('user.assign.create');
Route::post('/user-assign/store',[App\Http\Controllers\UserController::class,'storeAssign'])->name('user.assign.store');
Route::get('/user-assign/{id}/edit',[App\Http\Controllers\UserController::class,'editAssign'])->name('user.assign.edit');
Route::put('/user-assign/{id}/update',[App\Http\Controllers\UserController::class,'updateAssign'])->name('user.assign.update');
Route::delete('/user-assign/{id}/destroy',[App\Http\Controllers\UserController::class,'destroyAssign'])->name('user.assign.destroy');

Route::get('/me',App\Http\Controllers\ProfileController::class)->name('profile.me');
Route::post('/change-password',[App\Http\Controllers\UserController::class,'changepassword'])->name('user.change.password');



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
Route::get('/engineer/get/{id}',[App\Http\Controllers\EngineerController::class,'getEngineerByID'])->name('engineer.getbyid');


Route::get('inspector',[App\Http\Controllers\InspectorController::class,'index'])->name('inspector.index');
Route::get('inspector/fetch',[App\Http\Controllers\InspectorController::class,'fetch'])->name('inspector.fetch');

Route::get('engineer/email/create/{engineer_id}',[App\Http\Controllers\EngineerController::class,'createEmail'])->name('engineer.email.create');
Route::get('engineer/email/show/{engineer_id}/create',[App\Http\Controllers\EngineerController::class,'createEmail2'])->name('engineer.show.email');
Route::post('engineer/email',[App\Http\Controllers\EngineerController::class,'storeEmail'])->name('engineer.email.store');
Route::get('engineer/email/{id}/edit',[App\Http\Controllers\EngineerController::class,'editEmail'])->name('engineer.email.edit');
Route::put('engineer/email/{id}/update',[App\Http\Controllers\EngineerController::class,'updateEmail'])->name('engineer.email.update');
Route::delete('engineer/email/{id}',[App\Http\Controllers\EngineerController::class,'destroyEmail'])->name('engineer.email.destroy');

Route::get('engineer-assignment/{engineer_id}',[App\Http\Controllers\EngineerController::class,'assignment'])->name('engineer.assignment');
Route::post('engineer-assignment/store',[App\Http\Controllers\EngineerController::class,'assignmentStore'])->name('engineer.assignment.store');


Route::post('engineer/select2',[App\Http\Controllers\EngineerController::class,'select2'])->name('engineer.select2');


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

Route::get('/incoming-fetch-transmittal',[App\Http\Controllers\IncomingLetterController::class,'fetchTransmittal'])->name('incoming.fetch.transmittal');


/* request for inspection */
Route::get('/request-for-inspection',[\App\Http\Controllers\RfiController::class,'index'])->name('rfi.index');
Route::get('/request-for-inspection/create/first',[\App\Http\Controllers\RfiController::class,'createFirst'])->name('rfi.createFirst');
// Route::get('/request-for-inspection/create/{id}',[\App\Http\Controllers\RfiController::class,'create'])->name('rfi.create');
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

/* transmital */
Route::get('/document-transmittal',[App\Http\Controllers\TransmittalController::class,'index'])->name('transmittal.index');
Route::get('/document-transmittal/create',[App\Http\Controllers\TransmittalController::class,'create'])->name('transmittal.create');

/* Letters for incoming*/
Route::get('incoming',[App\Http\Controllers\LetterController::class,'index'])->name('letter.index');
Route::post('letters/create',[App\Http\Controllers\LetterController::class,'create'])->name('letter.create');
Route::post('letters/store',[App\Http\Controllers\LetterController::class,'store'])->name('letter.store');
Route::get('letters/edit/{id}',[App\Http\Controllers\LetterController::class,'edit'])->name('letter.edit');
Route::put('letters/update/{id}',[App\Http\Controllers\LetterController::class,'update'])->name('letter.update');
Route::delete('letters/destroy/{id}',[App\Http\Controllers\LetterController::class,'destroy'])->name('letter.destroy');


Route::get('incoming-letter-fetch',[App\Http\Controllers\LetterController::class,'fetchLetter'])->name('incoming.letter.fetch');
Route::get('incoming-transmittal-fetch',[App\Http\Controllers\LetterController::class,'fetchTransmittal'])->name('incoming.transmittal.fetch');
// Route::post('generate-pdf',[App\Http\Controllers\LetterController::class,'generatePDF'])->name('generate.pdf');
Route::get('generate-pdf/{letter_id}',[App\Http\Controllers\LetterController::class,'generatePDF'])->name('generate.pdf');

Route::get('letter/add-reference/',[App\Http\Controllers\LetterController::class,'addReference'])->name('letter.add.reference');
Route::post('letter/search-reference-number',[App\Http\Controllers\LetterController::class,'autoCompleteSearchRefNumber'])->name('letter.add.reference.autocomplete');
Route::post('letter/store-reference',[App\Http\Controllers\LetterController::class,'storeReference'])->name('letter.store.reference');
Route::get('letter/reference/{id}',[App\Http\Controllers\LetterController::class,'editReference'])->name('letter.edit.reference');
Route::put('letter/reference/{id}/update',[App\Http\Controllers\LetterController::class,'updateReference'])->name('letter.update.reference');
Route::delete('letter/reference/destroy{id}',[App\Http\Controllers\LetterController::class,'destroyReference'])->name('letter.destroy.reference');

/* attachment */
Route::get('letter/add-attachment',[App\Http\Controllers\LetterController::class,'addAttachment'])->name('letter.add.attachment');
Route::post('letter/attachment/store',[App\Http\Controllers\LetterController::class,'storeAttachment'])->name('letter.store.attachment');
Route::get('letter/attachment/{id}',[App\Http\Controllers\LetterController::class,'editAttachment'])->name('letter.edit.attachment');
Route::put('letter/attachment/{id}/edit',[App\Http\Controllers\LetterController::class,'updateAttachment'])->name('letter.update.attachment');
Route::delete('letter/attachment/{id}',[App\Http\Controllers\LetterController::class,'destroyAttachment'])->name('letter.destroy.attachment');

/* copy list of email */ 
Route::get('letter/copy/assignment/{letter_id}/{type}',[App\Http\Controllers\LetterController::class,'copyAssignTo'])->name('letter.copy.email.assign');

Route::post('letter-get-content-template',[App\Http\Controllers\LetterController::class,'getContentTemplate'])->name('letter.get.content.template');


Route::post('letter/{letter_id}/close',[App\Http\Controllers\LetterController::class,'closeLetter'])->name('letter.close');


/* end of Letters */

Route::prefix('utility')->group(function(){
        /* Document type */
        Route::get('document-type',[App\Http\Controllers\DocumenttypeController::class,'index'])->name('documenttype.index');
        Route::get('document-type/create',[App\Http\Controllers\DocumenttypeController::class,'create'])->name('documenttype.create');
        Route::post('document-type',[App\Http\Controllers\DocumenttypeController::class,'store'])->name('documenttype.store');
        Route::get('document-type/edit/{id}',[App\Http\Controllers\DocumenttypeController::class,'edit'])->name('documenttype.edit');
        Route::put('document-type/{id}',[App\Http\Controllers\DocumenttypeController::class,'update'])->name('documenttype.update');
        Route::delete('document-type/{id}',[App\Http\Controllers\DocumenttypeController::class,'destroy'])->name('documenttype.destroy');
        Route::get('document-type-fetch',[App\Http\Controllers\DocumenttypeController::class,'fetch'])->name('documenttype.fetch');
        /* end Document type */
});
/* tools */
    /* letter source */
        Route::get('letter-source',[App\Http\Controllers\LetterSourceController::class,'index'])->name('letter-source.index');
        Route::get('letter-source/create',[App\Http\Controllers\LetterSourceController::class,'create'])->name('letter-source.create');
        Route::post('letter-source',[App\Http\Controllers\LetterSourceController::class,'store'])->name('letter-source.store');
        Route::get('letter-source/edit/{id}',[App\Http\Controllers\LetterSourceController::class,'edit'])->name('letter-source.edit');
        Route::put('letter-source/{id}',[App\Http\Controllers\LetterSourceController::class,'update'])->name('letter-source.update');
        Route::delete('letter-source/{id}',[App\Http\Controllers\LetterSourceController::class,'destroy'])->name('letter-source.destroy');
        Route::get('letter-source-fetch',[App\Http\Controllers\LetterSourceController::class,'fetch'])->name('letter-source.fetch');
    /* end letter source */

    /* correnpondence-type */
        Route::get('correspondence-type',[App\Http\Controllers\CorrespondenceTypeController::class,'index'])->name('corres-type.index');
        Route::get('correspondence-type/create',[App\Http\Controllers\CorrespondenceTypeController::class,'create'])->name('corres-type.create');
        Route::post('correspondence-type',[App\Http\Controllers\CorrespondenceTypeController::class,'store'])->name('corres-type.store');
        Route::get('correspondence-type/edit/{id}',[App\Http\Controllers\CorrespondenceTypeController::class,'edit'])->name('corres-type.edit');
        Route::put('correspondence-type/{id}',[App\Http\Controllers\CorrespondenceTypeController::class,'update'])->name('corres-type.update');
        Route::delete('correspondence-type/{id}',[App\Http\Controllers\CorrespondenceTypeController::class,'destroy'])->name('corres-type.destroy');
        Route::get('correspondence-type-fetch',[App\Http\Controllers\CorrespondenceTypeController::class,'fetch'])->name('corres-type.fetch');
    /* end correnpondence-type */

   

    /* type of action */
    Route::get('type-of-action',[App\Http\Controllers\TypeOfActionController::class,'index'])->name('action-type.index');
    Route::get('type-of-action/create',[App\Http\Controllers\TypeOfActionController::class,'create'])->name('action-type.create');
    Route::post('type-of-action',[App\Http\Controllers\TypeOfActionController::class,'store'])->name('action-type.store');
    Route::get('type-of-action/{id}/edit',[App\Http\Controllers\TypeOfActionController::class,'edit'])->name('action-type.edit');
    Route::put('type-of-action/{id}/update',[App\Http\Controllers\TypeOfActionController::class,'update'])->name('action-type.update');
    Route::delete('type-of-action/{id}',[App\Http\Controllers\TypeOfActionController::class,'destroy'])->name('action-type.destroy');
    
    Route::get('type-of-action-fetch',[App\Http\Controllers\TypeOfActionController::class,'fetch'])->name('action-type.fetch');

    /* end type of action */


