<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontEnd\catagory\CatagoryIndexController;
use App\Http\Controllers\FrontEnd\Share\ShareController;
use App\Http\Controllers\FindUs\FindUsController;
use App\Models\FindUs;

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
    // start main route
    Route::get('Index', [App\Http\Controllers\FrontEnd\IndexController::class, 'Index'])->name('FrontEnd.Index');
    Route::get('Blank', [App\Http\Controllers\FrontEnd\IndexController::class, 'blank'])->name('FrontEnd.blank');

    //
    Route::get('Beauty', [App\Http\Controllers\FrontEnd\Beauty\BeautyController::class, 'index'])->name('Beauty.fr');
    Route::get('Body', [App\Http\Controllers\FrontEnd\Body\BodyController::class, 'index'])->name('Body.fr');
    Route::get('Mind', [App\Http\Controllers\FrontEnd\Mind\MindController::class, 'index'])->name('Mind.fr');
    Route::get('Calculator', [App\Http\Controllers\FrontEnd\Mind\MindController::class, 'index'])->name('calculator.fr');
    Route::get('Foods', [App\Http\Controllers\FrontEnd\Foods\FoodsController::class, 'index'])->name('Foods.fr');

    // end main route
    
    //catagory
    Route::get('Articles/', [App\Http\Controllers\FrontEnd\catagory\CatagoryIndexController::class, 'index'])->name('frontEnd.catagory.show');
    Route::get('Articles/Details/{list_post}', [App\Http\Controllers\FrontEnd\catagory\CatagoryIndexController::class, 'cateListShow'])->name('category.post');
    
    

    Route::get('Articles/Parent', [App\Http\Controllers\FrontEnd\catagory\ParentCategoryController::class, 'index'])->name('frontEnd.catagory.parent');
    Route::get('Articles/Parent/{list_cate}', [App\Http\Controllers\FrontEnd\catagory\ParentCategoryController::class, 'listCate'])->name('frontEnd.parentShow');
    

    //frontPage post
    Route::get('Articles/Blog/Details/{post_name}',[App\Http\Controllers\FrontEnd\Blog\FrontBlogController::class, 'ShowDetails'])->name('blog.details');

    //share
    Route::get('Articles/Blog/Details/Share/', [App\Http\Controllers\FrontEnd\Share\ShareController::class, 'facebook'])->name('facebook.share');

    //contact
    Route::get('Contact', [App\Http\Controllers\FrontEnd\IndexController::class, 'contact'])->name('frontend.contact');
    Route::post('Contact/Save', [App\Http\Controllers\contact\ContactController::class, 'contactSave'])->name('frontend.contactSave');
});

//End front end

Route::middleware(['middleware' => 'PreBackHistory'])->group(function(){
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');









