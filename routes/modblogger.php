<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Blogger\BloggerDashController;
use App\Http\Controllers\Blogger\AllPartUser\ListUserController;
use App\Http\Controllers\Blogger\AllPartUser\TeamUserController;
use App\Http\Controllers\Blogger\Category\CategoryController;


// use App\Http\Controllers\Blogger\Users\UsersTeamController;
//use App\Http\Controllers\Blogger\Users\ListUsersController;

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
Route::prefix('Administrator/Moderator')->middleware('auth:web','blogUser','PreBackHistory','is_user_verify_email')->group(function(){
    Route::get('/Dashboard', [App\Http\Controllers\Blogger\BloggerDashController::class, 'index'])->name('blogusr.dashboard');
    Route::get('Dashboard/Contact/Front/Page',[App\Http\Controllers\contact\ContactController::class, 'showBlogUser'])->name('blogusr.ShowContact');
    Route::get('Dashboard/Contact/Front/Show/{message_id}',[App\Http\Controllers\contact\ContactController::class, 'showBlogUserShow'])->name('blogusr.ShowContactShow');

    //user
    Route::get('/Dashboard/Users',[App\Http\Controllers\Blogger\AllPartUser\ListUserController::class, 'index'])->name('blogusr.users');
    Route::get('/Dashboard/Users/Archive',[App\Http\Controllers\Blogger\AllPartUser\ListUserController::class, 'archive'])->name('blogusr.archive');
    Route::get('/Dashboard/Users/Archive/user/{user_id}',[App\Http\Controllers\Blogger\AllPartUser\ListUserController::class, 'archivePost'])->name('blogusr.archivePost');
    Route::get('/Dashboard/Users/Archive/user/Restore/{user_id}',[App\Http\Controllers\Blogger\AllPartUser\ListUserController::class, 'archivePostRestore'])->name('restoreArchiveUser');
    Route::get('/Dashboard/Users/Updata/User/{user_id}',[App\Http\Controllers\Blogger\AllPartUser\ListUserController::class, 'updateUserBas'])->name('updateUserBlogger');
    Route::post('/Dashboard/Users/Updata/User/Save',[App\Http\Controllers\Blogger\AllPartUser\ListUserController::class, 'updateUserBasSave'])->name('updateUserBloggerSave');




    Route::get('/Dashboard/Profile',[App\Http\Controllers\Blogger\BloggerDashController::class, 'userProfile'])->name('blogusr.profile.dash');
    Route::post('/Dashboard/Profile/Update',[App\Http\Controllers\Blogger\BloggerDashController::class, 'userProfileUpdate'])->name('blogusr.profile.update');
    Route::post('/Dashboard/Profile/Update/Pass',[App\Http\Controllers\Blogger\BloggerDashController::class,'userProfileUpdatePass'])->name('blogusr.profile.update.pass');

    //category
    Route::get('Dashboard/Category',[App\Http\Controllers\Blogger\Category\CategoryController::class, 'index'])->name('bloggerCate.index');
    Route::get('Dashboard/Category/MyCategory',[App\Http\Controllers\Blogger\Category\CategoryController::class, 'myCategory'])->name('bloggerCate.myCate');
    Route::get('Dashboard/Category/Insert',[App\Http\Controllers\Blogger\Category\CategoryController::class, 'Insert'])->name('bloggerCate.insert');
    Route::post('Dashboard/Category/Insert/Save',[App\Http\Controllers\Blogger\Category\CategoryController::class, 'InsertSave'])->name('bloggerCate.insertSave');

    //post
    Route::get('Dashboard/Blog',[App\Http\Controllers\Blogger\Blog\BlogController::class, 'index'])->name('BlogUser.Insert');
    Route::get('Dashboard/Blog/Insert',[App\Http\Controllers\Blogger\Blog\BlogController::class, 'BlogInsert'])->name('BlogUser.postInsert');
    Route::post('Dashboard/Blog/Insert/Save',[App\Http\Controllers\Blogger\Blog\BlogController::class, 'BlogInsertSave'])->name('BlogUser.InsertSave');
    Route::get('Dashboard/Blog/My-Blog/Show',[App\Http\Controllers\Blogger\Blog\BlogController::class, 'BlogMyShow'])->name('BlogUser.MyBlogShow');
    Route::get('Dashboard/Blog/Pending/',[App\Http\Controllers\Blogger\Blog\BlogController::class, 'pendingBlog'])->name('BlogUser.pendingBlog');
    Route::get('Dashboard/Blog/Pending/{blog_id}/Show/',[App\Http\Controllers\Blogger\Blog\BlogController::class, 'pendingBlogShow'])->name('BlogUser.pendingBlogShow');
    Route::post('Dashboard/Blog/Pending/Show/Update',[App\Http\Controllers\Blogger\Blog\BlogController::class, 'pendingBlogShowUpdate'])->name('BlogUser.pendingBlogShowUpdate');

    Route::get('Dashboard/Blog/Archive/Soft/{blog_id}',[App\Http\Controllers\Blogger\Blog\BlogController::class, 'BlogArchiveSoft'])->name('BlogUser.blogArchiveSoft');
    Route::get('Dashboard/Blog/Archive/',[App\Http\Controllers\Blogger\Blog\BlogController::class, 'BlogArchive'])->name('BlogUser.blogArchive');
    Route::get('Dashboard/Blog/Archive/Restore/{blog_id}',[App\Http\Controllers\Blogger\Blog\BlogController::class, 'BlogArchiveRestore'])->name('BlogUser.blogArchiveRestore');
    // Route::get('Dashboard/Blog/Archive/Delete/{blog_id}',[App\Http\Controllers\Blogger\Blog\BlogController::class, 'BlogArchiveHardDelete'])->name('BlogUser.blogArchiveHardDelete');





});
