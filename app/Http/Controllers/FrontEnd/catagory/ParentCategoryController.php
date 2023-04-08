<?php

namespace App\Http\Controllers\FrontEnd\catagory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCatagory;
use App\Models\SuperCatagory;
use App\Models\SupUserBlog;

class ParentCategoryController extends Controller
{
    public function index(){
        $parent = SuperCatagory::where('supcatagory_status', '1')->get();
        return view('FrontEnd.catagory.parentCatagory', compact('parent'));
    }

    public function listCate($list_cate){
        $listCate = $list_cate;
        $allSubCate = SubCatagory::where('supcatanameslug', $listCate)->inRandomOrder()->get();
        return view('FrontEnd.catagory.singleCategory',[
            'allSubCate'=>$allSubCate
        ]);
    }
}
