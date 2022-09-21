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
//dashboard
// Route::prefix('User')->middleware('auth:web','basUser','PreBackHistory','is_user_verify_email')->group(function(){
//     Route::get('/Dashboard', [App\Http\Controllers\BasUser\BasUsrDashController::class, 'index'])->name('basUser.dashboard');


// });

Route::prefix('User')->name('basUser.')->group(function(){
    Route::middleware(['guest:web','basUser','PreBackHistory'])->group(function(){
        Route::get('/view', [App\Http\Controllers\BasUser\BasUsrDashController::class, 'index'])->name('view');
    });

    Route::middleware(['auth:web','basUser','PreBackHistory','is_user_verify_email'])->group(function(){
        Route::get('/Dashboard', [App\Http\Controllers\BasUser\BasUsrDashController::class, 'index'])->name('dashboard');
    });
});