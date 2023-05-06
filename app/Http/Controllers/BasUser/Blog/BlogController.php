<?php

namespace App\Http\Controllers\BasUser\Blog;

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

class BlogController extends Controller
{
    public function index(){
        $listCate = SubCatagory::where('catagory_status','0')->get();
        return view('BasUsrDash.blog.insertBlog',[
            'listCate'=>$listCate
        ]);
    }

    //save blog for pendind review
    public function insertBlog(Request $request){
        $request->validate([
            'blogName' => ['required'],
            'blogShortDesc' => ['required'],
            'blogMeta' => ['required'],
            'blogMetaDesc' => ['required'],
            'image' => ['required','mimes:jpg,png,jpeg,gif','max:3000'],
            'description' => ['required']
        ],[
            'blogName.required' => 'type your post name!',
            'blogShortDesc.required' => 'type your Post short description.',
            'blogMeta.required' => 'Post meta title required.',
            'blogMetaDesc.required' => 'Post meta description required.',
            'image.required' => 'blog image require',
            'description.required' => 'hmm, what do you thing',  
        ]);
        
        $catagory = $request->category;
        $subcagaCheck = SubCatagory::where('id', $catagory)->first();
        $sub_category_name = $subcagaCheck->subcatagoryname;
        $categoryName = $subcagaCheck->supcataname;
        $authId = Auth::id();
        $UserName = Auth::user()->name;
        $localTime = Carbon::now()->format('Y-m-d-H-i-s-u');
        $cataImage = $request->file('image');
        $newImageName =$localTime.'.'.$cataImage->getClientOriginalExtension();
        $cateCheck = $request->category;
        $slug = Str::slug($request->blogName);
        if($cateCheck == 0){
            return redirect()->back()->with('blogInsFail','article category not found...');
        }else{
            $checkPost = SupUserBlog::where('slug',$slug)->first();
            
            $subCateSlag = Str::slug($sub_category_name);
            $postStatus = 3;
            if ($checkPost == true) {
                return redirect()->back()->with('blogInsFail','Duplicate Article found change something...');
            }else {
                $insBlog = new SupUserBlog();
                $insBlog->blog_name = $request->blogName;
                $insBlog->slug = $slug;
                $insBlog->blog_short_desc = $request->blogShortDesc;
                $insBlog->blog_meta_title = $request->blogMeta;
                $insBlog->blog_meta_description = $request->blogMetaDesc;
                $insBlog->blog_meta_keyword = $request->blogMeta;
                $insBlog->category = $request->category;
                $insBlog->sub_category_name = $sub_category_name;
                $insBlog->sub_category_slug = $subCateSlag;
                $insBlog->blog_image = $newImageName;
                $insBlog->super_category = $categoryName;
                $insBlog->description = $request->description;
                $insBlog->post_status = $postStatus;
                $insBlog->userid = $authId;
                $insBlog->username = $UserName;
                $insBlog->created_at = Carbon::now();
                $save = $insBlog->save();

                $uploadLocation = base_path('public/uploads/postimage/'.$newImageName);
                Image::make($cataImage)->resize(800,500)->save($uploadLocation);

                
                if ($save) {
                    return redirect()->back()->with('blogInsSucc','hurray, Article is now live, just admin review it, good luck.');
                }else{
                    return redirect()->back()->with('blogInsFail','hmmm, Article insert failed, we got some error...');
                }
            }
            
        }
    }


}
