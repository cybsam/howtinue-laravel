<?php

namespace App\Http\Controllers\SupUser\Blog;

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

class SupUserBlogController extends Controller
{
    //index/list
    public function index(){
        return view('SupUserDash.blog.index');
    }

    //insert Blog
    public function insert(){
        $listCate = SubCatagory::where('catagory_status','0')->get();
        return view('SupUserDash.blog.insert', compact('listCate'));
    }

    public function insertSave(Request $request){
        //echo $request;
        //print_r($_POST);

        $request->validate([
            'blogName' => ['required'],
            'blogShortDesc' => ['required'],
            'blogMeta' => ['required'],
            'category' => ['required'],
            'blogImage' => ['required'],
            'description' => ['required']
        ]);
        $catagory = $request->category;
        $subcagaCheck = SubCatagory::where('id', $catagory)->first();
        //$subcagaCheck->

        $authId = Auth::id();
        $UserName = Auth::user()->name;

        if($subcagaCheck){
            $insBlog = new SupUserBlog();
            $insBlog->blog_name = $request->blogName;
            $insBlog->blogName = $request->blogShortDesc;
            $insBlog->blogMeta = $request->blogMeta;

            $insBlog->category = $request->category;
            $insBlog->description = $request->description;
            $insBlog->userid = $authId;
            $insBlog->username = $UserName;
            $insBlog->created_at = Carbon::now();
            $insBlog->save();

        }else{
            echo "category not found";
        }

        



    }
}
