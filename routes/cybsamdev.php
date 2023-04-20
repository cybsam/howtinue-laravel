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
Route::prefix('CybSamDev')->group(function(){
    // Route::get('Optimize', [App\Http\Controllers\CybSamDev\CybDevController::class, 'optimize'])->name('cybsamdev.optimize');
    Route::get('Optimize', function(){
        Artisan::call('optimize');
        return 'Application cache has been Optimize';
    });
    // Route::get('Clear-Cache', [App\Http\Controllers\CybSamDev\CybDevController::class, 'clearCache'])->name('cybsamdev.clearCache');
    // Clear application cache:
    Route::get('/clear-cache', function() {
        Artisan::call('cache:clear');
        return 'Application cache has been cleared';
    });

    //Clear route cache:
    Route::get('/route-cache', function() {
        Artisan::call('route:cache');
        return 'Routes cache has been cleared';
    });

    //Clear config cache:
    Route::get('/config-cache', function() {
        Artisan::call('config:cache');
        return 'Config cache has been cleared';
    }); 

    // Clear view cache:
    Route::get('/view-clear', function() {
        Artisan::call('view:clear');
        return 'View cache has been cleared';
    });
});
