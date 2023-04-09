<?php

namespace App\Http\Controllers\FrontEnd\Blog;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\SuperCatagory;
use App\Models\SubCatagory;
use App\Models\SupUserBlog;
use App\Models\UsersInfoAdmin;
use Share;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Image;
class FrontBlogController extends Controller
{
    public function index($blog_id){
        // $blog_id = $blog_id;
        // echo $blog_id;
        //return view();
    }

    public function ShowDetails($post_name){
        //echo $post_name;
        $listBlog = SupUserBlog::where('slug',$post_name)->firstOrFail();

        $userid = $listBlog->userid;
        
        $userDet = User::where('id',$userid)->firstOrFail();
        $userDetSocial = UsersInfoAdmin::where('user_id',$userid)->firstOrFail();

        $userAbout = UsersInfoAdmin::where('user_id',$userid)->firstOrFail();


        //releted
        $blogCateID = $listBlog->category;
        $reletedIn = SupUserBlog::where('category',$blogCateID)->limit(4)->get();

        return view('FrontEnd.blog.blogdetails', [
            'post'=>$listBlog,
            'userDet'=>$userDet,
            'userDetSocial'=>$userDetSocial,
            'reletedIn'=>$reletedIn,
            'userAbout'=>$userAbout
        ]);
    }
}
