<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuperCatagory;
use App\Models\SubCatagory;
use App\Models\SupUserBlog;

use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;

class IndexController extends Controller
{
    public function Index(){
        $listBlogFirst = SupUserBlog::where('post_status','0')->inRandomOrder()->get();
        $listBlog = SupUserBlog::where('post_status','0')->inRandomOrder()->get();
        $randomCate = SubCatagory::where('catagory_status',0)->inRandomOrder()->take(4)->get();


        return view('FrontEnd.index',[
            'listBlogFirst'=>$listBlogFirst,
            'listBlog'=>$listBlog,
            'randomCate'=>$randomCate,
            // 'postViewCountListBlog'=>$postViewCountListBlog
        ]);
    }

    public function blank(){
        return view('FrontEnd.blank');
    }

    public function contact(){
        return view('FrontEnd.contact.contact');
    }

    public function AboutUs(){
        return view('FrontEnd.pages.about-us');
    }
    public function SiteMap(){
        return view('FrontEnd.pages.sitemap');
    }
    public function termsofuse(){
        return view('FrontEnd.pages.terms-of-use');
    }
}
