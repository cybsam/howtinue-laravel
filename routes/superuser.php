<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SupUser\SupUserDashController;

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


//Super User
Route::prefix('Administrator/SuperUser')->middleware('auth:web','supUser','PreBackHistory','is_user_verify_email')->group(function(){
    Route::get('/Dashboard', [App\Http\Controllers\SupUser\SupUserDashController::class, 'index'])->name('supuser.dashboard');
    // users
    Route::get('/Dashboard/Profile', [App\Http\Controllers\SupUser\SupUserDashController::class, 'UserProfile'])->name('supuser.profile.dashboard');
    Route::post('/Dashboard/Profile/Update', [App\Http\Controllers\SupUser\SupUserDashController::class, 'UserProfileUpdate'])->name('supuser.profileupdate.dashboard');
    Route::post('/Dashboard/Profile/Update/Pass', [App\Http\Controllers\SupUser\SupUserDashController::class, 'UserProfileUpdatePass'])->name('supuser.profileupdate.pass.dashboard');

    Route::get('Dashboard/Users', [App\Http\Controllers\SupUser\User\ListUserController::class, 'index'])->name('supuser.listuser');

    



    Route::get('/BlankPage', [App\Http\Controllers\SupUser\SupUserDashController::class, 'blank'])->name('supuser.blank');


});
