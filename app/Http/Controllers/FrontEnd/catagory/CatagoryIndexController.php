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

    public function cateListShow($list_post){
        $linkCate = $list_post;
        $categoryName = SupUserBlog::where('slug',$linkCate)->get();
        return view('FrontEnd.catagory.cateListPost',[
            'categoryName'=>$categoryName
        ]);
    }
    
}
