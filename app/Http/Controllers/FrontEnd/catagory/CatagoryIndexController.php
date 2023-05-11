<?php

namespace App\Http\Controllers\FrontEnd\catagory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCatagory;
use App\Models\SuperCatagory;
use App\Models\SupUserBlog;

class CatagoryIndexController extends Controller
{
    public function index(){
        $listCata = SubCatagory::where('catagory_status','0')->get();
        return view('FrontEnd.catagory.index',[
            'listCata'=>$listCata
        ]);
    }


    //show article
    public function cateListShow($list_post){
        $activeValue = 0;
        $linkCate = $list_post;
        $categoryName = SupUserBlog::where('sub_category_slug',$linkCate)->inRandomOrder()->get();
        // $randArticleCheck = SupUserBlog::where([
        //     'sub_category_slug'=>$linkCate,
        //     'post_status'=>$activeValue
        // ])->inRandomOrder()->take(5)->get();

        return view('FrontEnd.catagory.cateListPost',[
            'categoryName'=>$categoryName,
            // 'randArticleCheck'=>$randArticleCheck
        ]);
    }

}
