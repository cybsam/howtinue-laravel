<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CybSamDev\CybDevController;

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

// CybSam Code
Route::prefix('CybSamDevelopment')->group(function(){
    Route::get('Optimize', [App\Http\Controllers\CybSamDev\CybDevController::class, 'optimize'])->name('cybsam.dev.optimize');
});
