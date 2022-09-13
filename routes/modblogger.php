<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Blogger\BloggerDashController;

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


//blogger
Route::prefix('Administrator/Blogger')->middleware('auth:web','blogUser','PreBackHistory','is_user_verify_email')->group(function(){
    Route::get('/Dashboard', [App\Http\Controllers\Blogger\BloggerDashController::class, 'index'])->name('blogusr.dashboard');

});
