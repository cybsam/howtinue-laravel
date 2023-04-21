<?php

namespace App\Http\Controllers\Blogger\Category;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\SuperCatagory;
use App\Models\SubCatagory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(){

        $cateGory = SubCatagory::where('catagory_status',0)->get();

        return view('BlogUserDash.category.index',[
            'cateGory'=>$cateGory
        ]);
    }

    //my category
    public function myCategory(){

        $authId = Auth::id();

        $cateGory = SubCatagory::where('userid',$authId)->get();

        return view('BlogUserDash.category.mycategory',[
            'cateGory'=>$cateGory
        ]);
    }
}
