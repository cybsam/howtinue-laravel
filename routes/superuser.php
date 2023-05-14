<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SupUser\SupUserDashController;
use App\Http\Controllers\SupUser\Catagory\SupCatagoryController;
use App\Http\Controllers\SupUser\Catagory\SubCatagoryController;
use App\Http\Controllers\SupUser\Blog\SupUserBlogController;
use App\Http\Controllers\SupUser\Team\ListTeamController;
use App\Http\Controllers\SupUser\Settings\MainSettingsController;
use App\Http\Controllers\contact\ContactController;

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
    Route::get('Dashboard/FrontPage/Contact',[App\Http\Controllers\contact\ContactController::class, 'showSupUser'])->name('supuser.frontendcontact');
    Route::get('Dashboard/FrontPage/Contact/Show/{message_id}',[App\Http\Controllers\contact\ContactController::class, 'showSupUserMsgShow'])->name('supuser.frontendcontactMsgShow');

    Route::get('/Dashboard/Profile', [App\Http\Controllers\SupUser\SupUserDashController::class, 'UserProfile'])->name('supuser.profile.dashboard');
    Route::post('/Dashboard/Profile/Update', [App\Http\Controllers\SupUser\SupUserDashController::class, 'UserProfileUpdate'])->name('supuser.profileupdate.dashboard');
    Route::post('/Dashboard/Profile/Update/Pass', [App\Http\Controllers\SupUser\SupUserDashController::class, 'UserProfileUpdatePass'])->name('supuser.profileupdate.pass.dashboard');

    Route::get('Dashboard/Users', [App\Http\Controllers\SupUser\User\ListUserController::class, 'index'])->name('supuser.listuser');
    Route::get('Dashboard/Users/Archive',[App\Http\Controllers\SupUser\User\ListUserController::class, 'ArchiveUser'])->name('supuser.archive');
    Route::get('Dashboard/Users/Archive/Restore/{user_id}',[App\Http\Controllers\SupUser\User\ListUserController::class, 'ArchiveUserRestore'])->name('supuser.archiveRestore');
    Route::get('Dashboard/Users/Archive/Block', [App\Http\Controllers\SupUser\User\ListUserController::class, 'BlockUser'])->name('supuser.archiveBlock');
    Route::get('Dashboard/Users/Archive/Block/Restore/{user_id}', [App\Http\Controllers\SupUser\User\ListUserController::class, 'BlockUserRestore'])->name('supuser.archiveBlockRestore');
    Route::get('Dashboard/Users/Update/User/{user_id}', [App\Http\Controllers\SupUser\User\ListUserController::class, 'SupUserUpdate'])->name('supuser.UpdateUser');
    Route::post('Dashboard/Users/Update/User/Save', [App\Http\Controllers\SupUser\User\ListUserController::class, 'SupUserUpdateSave'])->name('supuser.UpdateUserSave');

    Route::get('Dashboard/Users/Archive/User/{user_id}', [App\Http\Controllers\SupUser\User\ListUserController::class, 'ArchiveUserFrom'])->name('supuser.archiveUser');
    Route::get('Dashboard/Users/Block/User/{user_id}', [App\Http\Controllers\SupUser\User\ListUserController::class, 'BlockUserFrom'])->name('supuser.BlockUser');


    //team
    Route::get('Dashboard/Users/Team/List',[App\Http\Controllers\SupUser\Team\ListTeamController::class,'index'])->name('supuser.users.team');

    //catagory

    Route::get('Dashboard/Catagory/SubCatagory',[App\Http\Controllers\SupUser\Catagory\SubCatagoryController::class, 'index'])->name('subcatagory.index');
    Route::get('Dashboard/Catagory/SubCatagory/Insert',[App\Http\Controllers\SupUser\Catagory\SubCatagoryController::class, 'Insert'])->name('subcatagory.insert');
    Route::post('Dashboard/Catagory/SubCatagory/Insert/Check',[App\Http\Controllers\SupUser\Catagory\SubCatagoryController::class, 'InsertCheck'])->name('subcatagory.insert.check');
    Route::get('Dashboard/Catagory/SubCatagory/Archived',[App\Http\Controllers\SupUser\Catagory\SubCatagoryController::class, 'archived'])->name('subcatagoryIndex.archived');
    Route::get('Dashboard/Catagory/SubCatagory/Archived/Soft/{cate_id}',[App\Http\Controllers\SupUser\Catagory\SubCatagoryController::class, 'archivedSoft'])->name('subcatagoryIndex.archivedSoft');
    Route::get('Dashboard/Catagory/SubCatagory/Archived/Restore/{cate_id}',[App\Http\Controllers\SupUser\Catagory\SubCatagoryController::class, 'restor'])->name('subcatagory.Restor');
    Route::get('Dashboard/Catagory/SubCatagory/My-Category',[App\Http\Controllers\SupUser\Catagory\SubCatagoryController::class, 'myCategory'])->name('subcatagory.mycategory');




    //blog
    Route::get('Dashboard/Article/List',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'index'])->name('supuser.blog');
    Route::get('Dashboard/Article/Insert',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'insert'])->name('supuser.blog.insert');
    Route::post('Dashboard/Article/Insert/Save',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'insertSave'])->name('supuserBlog.insertSave');
    Route::get('Dashboard/Article/My-Article',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'MyBlog'])->name('supuserBlog.myBlog');
    Route::get('Dashboard/Article/Pending/List',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'PendingBlog'])->name('supuserBlog.pendingBlog');
    Route::get('Dashboard/Article/Pending/List/Show/{blog_id}/View=true',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'PendingBlogShow'])->name('supuserBlog.pendingBlogShow');
    Route::post('Dashboard/Article/Pending/List/Show/Pending/Active',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'PendingBlogShowActive'])->name('supuserBlog.pendingBlogShowActive');

    Route::get('Dashboard/Article/Archive',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'SupUserArchiveList'])->name('supuser.blogArchive');
    Route::get('Dashboard/Article/Archive/Soft/{blog_id}',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'SupUserArchiveSoft'])->name('supuser.blogArchiveSoft');
    Route::get('Dashboard/Article/Archive/Restore/{blog_id}',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'SupUserArchiveRestore'])->name('supuser.blogArchiveRestore');
    Route::get('Dashboard/Article/Archive/Delete/{blog_id}',[App\Http\Controllers\SupUser\Blog\SupUserBlogController::class, 'SupUserArchiveDelete'])->name('supuser.blogArchiveDelete');




    //sup catagory
    Route::get('Dashboard/Catagory/SuperCatagory', [App\Http\Controllers\SupUser\Catagory\SupCatagoryController::class, 'index'])->name('supuser.cata.super');
    Route::get('Dashboard/Catagory/SuperCatagory/Insert', [App\Http\Controllers\SupUser\Catagory\SupCatagoryController::class, 'insert'])->name('supuser.cata.super.insert');
    Route::post('Dashboard/Catagory/SuperCatagory/Insert/Check', [App\Http\Controllers\SupUser\Catagory\SupCatagoryController::class, 'insertCheck'])->name('supuser.cata.super.insert.chk');
    Route::get('Dashboard/Catagory/SuperCatagory/Update/{cataId}',[App\Http\Controllers\SupUser\Catagory\SupCatagoryController::class, 'catagoryUpdate'])->name('supuser.cata.super.update');
    Route::get('Dashboard/Catagory/SuperCatagory/Archive',[App\Http\Controllers\SupUser\Catagory\SupCatagoryController::class, 'Archive'])->name('supuser.cata.super.archive');
    Route::get('Dashboard/Catagory/SuperCatagory/Archive/{cataId}',[App\Http\Controllers\SupUser\Catagory\SupCatagoryController::class, 'catagoryArchive'])->name('supuser.cata.super.goarchive');
    Route::get('Dashboard/Catagory/SuperCatagory/My-Category',[App\Http\Controllers\SupUser\Catagory\SupCatagoryController::class, 'MyCategory'])->name('supuser.MycategorySuper');


    //settings
    Route::get('Dashboard/Settings/Main', [App\Http\Controllers\SupUser\Settings\MainSettingsController::class, 'mainSett'])->name('supuser.settings.main');
    Route::post('Dashboard/Settings/Main/Update', [App\Http\Controllers\SupUser\Settings\MainSettingsController::class, 'mainSetUpdate'])->name('supuser.settingsMainUpdate');
    Route::get('Dashboard/Settings/FindUs/Social', [App\Http\Controllers\FindUs\FindUsController::class, 'SocialFind'])->name('supuser.FindUsBackend');
    Route::post('Dashboard/Settings/FindUs/Social/Update', [App\Http\Controllers\FindUs\FindUsController::class, 'SocialFindUpdate'])->name('supuser.FindUsBackendUpdate');


    Route::get('Dashboard/Settings/AboutUs',[App\Http\Controllers\AboutUs\AboutUsController::class, 'backEndIndex'])->name('supuser.settingsAboutUs');
    Route::post('Dashboard/Settings/AboutUs/Update=true',[App\Http\Controllers\AboutUs\AboutUsController::class, 'backEndAboutUpdate'])->name('supuser.settingsAboutUsUpdate');

    Route::get('Dashboard/Settings/TermsOfCondition',[App\Http\Controllers\SupUser\Settings\TermsOfConditionController::class, 'showViewDeteils'])->name('supuser.termsOfCondition');
    Route::post('Dashboard/Settings/TermsOfCondition/update=true',[App\Http\Controllers\SupUser\Settings\TermsOfConditionController::class, 'showViewDeteilsUpdate'])->name('supuser.termsOfConditionUpdate');

    //chat
    // Route::get('Dashboard/Contact',[App\Http\Controllers\Chat\ChatController::class, 'supUserChat'])->name('supuser.chat');
    // Route::get('Dashboard/Contact/Show/{user_id}',[App\Http\Controllers\Chat\ChatController::class, 'supUserChatShow'])->name('supuser.chatshow');



    //blank
    Route::get('/BlankPage', [App\Http\Controllers\SupUser\SupUserDashController::class, 'blank'])->name('supuser.blank');


});
