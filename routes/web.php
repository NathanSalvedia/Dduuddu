<?php

use App\Http\Controllers\MainpageController;
use App\Http\Controllers\RequestFormController;
use App\Http\Controllers\Settings\ProfileController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/login', function () {
   // return view('login');
//})->name('login');


//Route::get('/register', function () {
    //return view('register');
//})->name('register');




Route::middleware(['auth'])->group(function (){


    Route::resource('requestforms', RequestFormController::class);
    Route::get('/settings/profile-information', ProfileController::class)->name('user-profile-information.edit');
    Route::get('/mainpage', MainpageController::class)->name('mainpage');




});


Route::get('/admin/admin-mainpage', function () {
    return view('admin.admin-mainpage');
});
