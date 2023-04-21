<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SupUser\SupUserDashController;
use App\Http\Controllers\SupUser\Catagory\SupCatagoryController;
use App\Http\Controllers\SupUser\Catagory\SubCatagoryController;
use App\Http\Controllers\SupUser\Blog\SupUserBlogController;
use App\Http\Controllers\SupUser\Team\ListTeamController;
use App\Http\Controllers\SupUser\Settings\MainSettingsController;

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
    //team
    Route::get('Dashboard/Users/Team/List',[App\Http\Controllers\SupUser\Team\ListTeamController::class,'index'])->name('supuser.users.team');

    //catagory

    Route::get('Dashboard/Catagory/SubCatagory',[App\Http\Controllers\SupUser\Catagory\SubCatagoryController::class, 'index'])->name('subcatagory.index');
    Route::get('Dashboard/Catagory/SubCatagory/Insert',[App\Http\Controllers\SupUser\Catagory\SubCatagoryController::class, 'Insert'])->name('subcatagory.insert');
    Route::post('Dashboard/Catagory/SubCatagory/Insert/Check',[App\Http\Controllers\SupUser\Catagory\SubCatagoryController::class, 'InsertCheck'])->name('subcatagory.insert.check');
    Route::get('Dashboard/Catagory/SubCatagory/Archived',[App\Http\Controllers\SupUser\Catagory\SubCatagoryController::class, 'archived'])->name('subcatagoryIndex.archived');
    Route::get('Dashboard/Catagory/SubCatagory/Archived/Soft/{cate_id}',[App\Http\Controllers\SupUser\Catagory\SubCatagoryController::class, 'archivedSoft'])->name('subcatagoryIndex.archivedSoft');
    Route::get('Dashboard/Catagory/SubCatagory/Archived/Restore/{cate_id}',[App\Http\Controllers\SupUser\Catagory\SubCatagoryController::class, 'restor'])->name('subcatagory.Restor');
    


    //blog
    Route::get('/Dashboard/Blog/List',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'index'])->name('supuser.blog');
    Route::get('/Dashboard/Blog/Insert',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'insert'])->name('supuser.blog.insert');
    Route::post('/Dashboard/Blog/Insert/Save',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'insertSave'])->name('supuserBlog.insertSave');

    //sup catagory
    Route::get('Dashboard/Catagory/SuperCatagory', [App\Http\Controllers\SupUser\Catagory\SupCatagoryController::class, 'index'])->name('supuser.cata.super');
    Route::get('Dashboard/Catagory/SuperCatagory/Insert', [App\Http\Controllers\SupUser\Catagory\SupCatagoryController::class, 'insert'])->name('supuser.cata.super.insert');
    Route::post('Dashboard/Catagory/SuperCatagory/Insert/Check', [App\Http\Controllers\SupUser\Catagory\SupCatagoryController::class, 'insertCheck'])->name('supuser.cata.super.insert.chk');
    Route::get('Dashboard/Catagory/SuperCatagory/Update/{cataId}',[App\Http\Controllers\SupUser\Catagory\SupCatagoryController::class, 'catagoryUpdate'])->name('supuser.cata.super.update');
    Route::get('Dashboard/Catagory/SuperCatagory/Archive',[App\Http\Controllers\SupUser\Catagory\SupCatagoryController::class, 'Archive'])->name('supuser.cata.super.archive');
    Route::get('Dashboard/Catagory/SuperCatagory/Archive/{cataId}',[App\Http\Controllers\SupUser\Catagory\SupCatagoryController::class, 'catagoryArchive'])->name('supuser.cata.super.goarchive');

    //settings
    Route::get('Dashboard/Settings/Main', [App\Http\Controllers\SupUser\Settings\MainSettingsController::class, 'mainSett'])->name('supuser.settings.main');
    //blank
    Route::get('/BlankPage', [App\Http\Controllers\SupUser\SupUserDashController::class, 'blank'])->name('supuser.blank');

    
});
