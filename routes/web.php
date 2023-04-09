<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontEnd\catagory\CatagoryIndexController;
use App\Http\Controllers\FrontEnd\Share\ShareController;

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

    //catagory
    Route::get('Category', [App\Http\Controllers\FrontEnd\catagory\CatagoryIndexController::class, 'index'])->name('frontEnd.catagory.show');
    Route::get('Category/Details/{list_post}', [App\Http\Controllers\FrontEnd\catagory\CatagoryIndexController::class, 'cateListShow'])->name('category.post');
    

    Route::get('Category/Parent', [App\Http\Controllers\FrontEnd\catagory\ParentCategoryController::class, 'index'])->name('frontEnd.catagory.parent');
    Route::get('Category/Parent/{list_cate}', [App\Http\Controllers\FrontEnd\catagory\ParentCategoryController::class, 'listCate'])->name('frontEnd.parentShow');
    

    //frontPage post
    Route::get('Blog/Details/{post_name}',[App\Http\Controllers\FrontEnd\Blog\FrontBlogController::class, 'ShowDetails'])->name('blog.details');

    //share
    Route::get('Blog/Details/Share/', [App\Http\Controllers\FrontEnd\Share\ShareController::class, 'facebook'])->name('facebook.share');

    //contact
    Route::get('Contact', [App\Http\Controllers\FrontEnd\IndexController::class, 'contact'])->name('frontend.contact');
});

//End front end

Route::middleware(['middleware' => 'PreBackHistory'])->group(function(){
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');









