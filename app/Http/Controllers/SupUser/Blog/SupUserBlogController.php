<?php

namespace App\Http\Controllers\SupUser\Blog;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\SuperCatagory;
use App\Models\SubCatagory;
use App\Models\SupUserBlog;

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
        
        $request->validate([
            'blogName' => ['required'],
            'blogShortDesc' => ['required'],
            'blogMeta' => ['required'],
            
            'image' => ['required','mimes:jpg,png,jpeg,gif','max:3000'],
            'description' => ['required']
        ],[
            'blogName.required' => 'type your post name!',
            'blogShortDesc.required' => 'type your Post short description.',
            'blogMeta.required' => 'Post meta tag required.',
            
            'image.required' => 'blog image require',
            'description.required' => 'hmm, what do you thing',  
        ]);
        
       
        // $insBlog = new SupUserBlog();
        // $insBlog->blog_name = $request->blogName;

        $catagory = $request->category;
        $subcagaCheck = SubCatagory::where('id', $catagory)->first();
        $sub_category_name = $subcagaCheck->subcatagoryname;
        $categoryName = $subcagaCheck->supcataname;
        // $super category->
        // $SuperCategoryNameId = SuperCatagory::where('supcatagoryname',$categoryName)->first();
        // $SuperCategoryName = $SuperCategoryNameId->
        
        $authId = Auth::id();
        $UserName = Auth::user()->name;

        $localTime = Carbon::now()->format('Y-m-d-H-i-s');
        //$newTime = Carbon::createFromFormat('Y-m-d', $localTime)->format('d/m/Y');
        

        $cataImage = $request->file('image');
       
        $newImageName =$localTime.'.'.$cataImage->getClientOriginalExtension();
        $cateCheck = $request->category;
        if($cateCheck == 0){
            return redirect()->back()->with('blogInsFail','category not found...');
        }else{
            $slug = Str::slug($request->blogName);
            $insBlog = new SupUserBlog();
            $insBlog->blog_name = $request->blogName;
            $insBlog->slug = $slug;
            $insBlog->blog_short_desc = $request->blogShortDesc;
            $insBlog->blog_meta = $request->blogMeta;

            $insBlog->category = $request->category;
            $insBlog->sub_category_name = $sub_category_name;
            $insBlog->blog_image = $newImageName;
            $insBlog->super_category = $categoryName;

            $insBlog->description = $request->description;
            $insBlog->userid = $authId;
            $insBlog->username = $UserName;
            $insBlog->created_at = Carbon::now();
            $save = $insBlog->save();

            $uploadLocation = base_path('public/uploads/postimage/'.$newImageName);
            Image::make($cataImage)->resize(800,500)->save($uploadLocation);

            
            if ($save) {
                return redirect()->back()->with('blogInsSucc','hurray, Post is now live. check it now!');
            }else{
                return redirect()->back()->with('blogInsFail','hmmm, Post insert failed, we got some error...');
            }
        }

       
    }


}
