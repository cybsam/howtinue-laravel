<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



//Front end
Route::get('/', function () {
    return redirect()->route('FrontEnd.Index');
});
// Route::get('/', [App\Http\Controllers\FrontEnd\IndexController::class, 'Index'])->name('FrontEnd.Index');
Route::prefix('en')->group(function () {
    Route::get('Index', [App\Http\Controllers\FrontEnd\IndexController::class, 'Index'])->name('FrontEnd.Index');
    Route::get('Blank', [App\Http\Controllers\FrontEnd\IndexController::class, 'blank'])->name('FrontEnd.blank');
});

//End front end

Route::middleware(['middleware' => 'PreBackHistory'])->group(function(){
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');









