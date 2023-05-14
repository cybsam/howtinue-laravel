<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuperCatagory;
use App\Models\SubCatagory;
use App\Models\SupUserBlog;
use App\Models\TermsOfCondition;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;

class IndexController extends Controller
{
    public function Index(){
        $listBlogFirst = SupUserBlog::where('post_status','0')->inRandomOrder()->get();
        $listBlog = SupUserBlog::where('post_status','0')->inRandomOrder()->get();

        //random category
        $randomCate = SubCatagory::where('catagory_status',0)->inRandomOrder()->take(7)->get();

        //bauty article
        $beautyCategory = 'beauty';
        $beautyRandomBlog = SupUserBlog::where('super_category',$beautyCategory)->where('post_status',0)->inRandomOrder()->get();
        //end beauty article

        //foods article
        $foodsCategory = 'foods';
        $foodsRandomBlog = SupUserBlog::where('super_category',$foodsCategory)->where('post_status',0)->inRandomOrder()->take(20)->get();
        $foodsTakeOneBlog = SupUserBlog::where('super_category',$foodsCategory)->where('post_status',0)->take(1)->latest()->first();
        $foodsRandTwoArticle = SupUserBlog::where('super_category',$foodsCategory)->where('post_status',0)->inRandomOrder()->take(2)->get();
        //end

        //body article
        $bodyCategory = 'body';
        $bodyArticleRandom = SupUserBlog::where('super_category',$bodyCategory)->where('post_status',0)->inRandomOrder()->paginate(6);

        //recent post
        $recentArticle = SupUserBlog::where('post_status',0)->inRandomOrder()->take(2)->latest()->get();
        $recentArticleFour = SupUserBlog::where('post_status',0)->inRandomOrder()->take(4)->get();


        return view('FrontEnd.index',[
            'listBlogFirst'=>$listBlogFirst,
            'listBlog'=>$listBlog,
            'randomCate'=>$randomCate,
            'beautyRandomBlog'=>$beautyRandomBlog,
            'foodsRandomBlog'=>$foodsRandomBlog,
            'foodsTakeOneBlog'=>$foodsTakeOneBlog,
            'foodsRandTwoArticle'=>$foodsRandTwoArticle,
            'bodyArticleRandom'=>$bodyArticleRandom,
            'recentArticle'=>$recentArticle,
            'recentArticleFour'=>$recentArticleFour
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
        $fetchTermsOfCondition = TermsOfCondition::where('id',1)->first();
        return view('FrontEnd.pages.terms-of-use',[
            'fetchTermsOfCondition'=>$fetchTermsOfCondition
        ]);
    }
}
