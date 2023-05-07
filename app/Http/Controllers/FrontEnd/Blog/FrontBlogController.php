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

    //single blog show function
    public function ShowDetails(Request $request, $post_name){
        
        $listBlog = SupUserBlog::where('slug',$post_name)->where('post_status',0)->firstOrFail();
        

        $userid = $listBlog->userid;
        
        $userDet = User::where('id',$userid)->firstOrFail();
        $userDetSocial = UsersInfoAdmin::where('user_id',$userid)->firstOrFail();

        $userAbout = UsersInfoAdmin::where('user_id',$userid)->firstOrFail();

        //share social media
        $currentUrl = url()->current();
        $postName = $listBlog->blog_name;
        $socialShare = \Share::page(
            $currentUrl,
            $postName,
        )
        ->facebook()
        ->twitter()
        ->whatsapp()
        ->reddit()
        ->linkedin()
        ->telegram();

        //end social share

        //post view count
        views($listBlog)->record();
        $postViewCount = views($listBlog)->count();

        //releted
        $blogCateID = $listBlog->category;
        $reletedIn = SupUserBlog::where('category',$blogCateID)->where('post_status',0)->limit(4)->get();
        $youMayAlsoLike = SupUserBlog::where('category',$blogCateID)->where('post_status',0)->limit(10)->get();
        return view('FrontEnd.blog.blogdetails', [
            'post'=>$listBlog,
            'userDet'=>$userDet,
            'userDetSocial'=>$userDetSocial,
            'reletedIn'=>$reletedIn,
            'youMayAlsoLike'=>$youMayAlsoLike,
            'userAbout'=>$userAbout,
            'socialShare'=>$socialShare,
            'postViewCount'=>$postViewCount
        ]);
    }
    //end single blog function

}
