<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BasUser\BasUsrDashController;

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


Route::get('/User/Verify', [App\Http\Controllers\Auth\RegisterController::class, 'verify'])->name('email.verify');

//complecate route
Route::prefix('User')->name('basUser.')->group(function(){
    Route::middleware(['guest:web','basUser','PreBackHistory'])->group(function(){
        Route::get('/view', [App\Http\Controllers\BasUser\BasUsrDashController::class, 'index'])->name('view');
    });

    Route::middleware(['auth:web','basUser','PreBackHistory','is_user_verify_email'])->group(function(){
        Route::get('Dashboard/View', [App\Http\Controllers\BasUser\BasUsrDashController::class, 'index'])->name('dashboard');
        Route::get('Dashboard/View/Profile', [App\Http\Controllers\BasUser\BasUsrDashController::class, 'Profile'])->name('dashboardprofile');
        Route::get('Dashboard/View/Profile/Update', [App\Http\Controllers\BasUser\BasUsrDashController::class, 'ProfileUpdate'])->name('profileUpdate');
        Route::post('Dashboard/View/Profile/Update/Save', [App\Http\Controllers\BasUser\BasUsrDashController::class, 'ProfileUpdateSave'])->name('profileUpdateSave');
        Route::get('Dashboard/View/Profile/Update/Password', [App\Http\Controllers\BasUser\BasUsrDashController::class, 'ProfileUpdatePassword'])->name('profileUpdatePassword');
        Route::post('Dashboard/View/Profile/Update/Password/Update', [App\Http\Controllers\BasUser\BasUsrDashController::class, 'ProfileUpdatePasswordsave'])->name('profileUpdatePasswordSave');
        
    });
});

//basic route
// Route::prefix('User')->middleware(['auth:web','basUser','PreBackHistory','is_user_verify_email'])->group(function(){
//     Route::get('Dashboard/View', [App\Http\Controllers\BasUser\BasUsrDashController::class, 'index'])->name('dashboard');
//     Route::get('Dashboard/View/Profile', [App\Http\Controllers\BasUser\BasUsrDashController::class, 'Profile'])->name('dashboardprofile');
        
// });