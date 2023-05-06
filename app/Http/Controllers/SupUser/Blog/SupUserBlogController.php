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
        $articleShow = SupUserBlog::all();
        return view('SupUserDash.blog.index',[
            'articleShow'=>$articleShow
        ]);
    }

    //insert Blog
    public function insert(){
        $listCate = SubCatagory::where('catagory_status','0')->get();
        return view('SupUserDash.blog.insert', compact('listCate'));
    }

    public function insertSave(Request $request){
        
        $request->validate([
            'blogName' => ['required','max:255'],
            'blogShortDesc' => ['required','max:255'],
            'blogMeta' => ['required','max:255'],
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
        // $super category->
        // $SuperCategoryNameId = SuperCatagory::where('supcatagoryname',$categoryName)->first();
        // $SuperCategoryName = $SuperCategoryNameId->
        
        $authId = Auth::id();
        $UserName = Auth::user()->name;

        $localTime = Carbon::now()->format('Y-m-d-H-i-s-u');
        //$newTime = Carbon::createFromFormat('Y-m-d', $localTime)->format('d/m/Y');
        

        $cataImage = $request->file('image');
       
        $newImageName =$localTime.'.'.$cataImage->getClientOriginalExtension();
        $cateCheck = $request->category;

        
        $slug = Str::slug($request->blogName);
            
        if($cateCheck == 0){
            return redirect()->back()->with('blogInsFail','category not found...');
        }else{
            $checkPost = SupUserBlog::where('slug',$slug)->first();
            
            $subCateSlag = Str::slug($sub_category_name);

            if ($checkPost == true) {
                return redirect()->back()->with('blogInsFail','Duplicate Post found change something...');
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

    //
    public function MyBlog(){
        $userId = Auth::id();
        $myArticle = SupUserBlog::where('userid',$userId)->get();
        return view('SupUserDash.blog.my-blog',[
            'myArticle' => $myArticle
        ]);
    }

    //pending blog

    public function PendingBlog(){
        $penArticle = SupUserBlog::where('post_status','3')->get();
        $penArticleCount = SupUserBlog::where('post_status','3')->count();
        return view('SupUserDash.blog.pending',[
            'penArticle' => $penArticle,
            'penArticleCount'=>$penArticleCount
        ]);
    }

    //show blog
    public function PendingBlogShow($blog_id){

        $blog_id = $blog_id;
        $showData = SupUserBlog::where('id',$blog_id)->first();
        $PendingBlogCount= $showData->count();
        return view('SupUserDash.blog.showPendingBlog',[
            'showData'=>$showData,
            'PendingBlogCount'=>$PendingBlogCount
        ]);
    }

    //update article
    public function PendingBlogShowActive(Request $request){
        $id = $request->__articleid;
        $activeArti = $request->__articleActivate;
        if ($activeArti == 0) {
            $updateStatus = SupUserBlog::where('id',$id)->update([
                'post_status'=>$activeArti,
                'updated_at'=>Carbon::now()
            ]);
            if ($updateStatus) {
                return redirect()->route('supuser.blog')->with('succ','Article is live now, check it...');
            }else {
                return redirect()->back()->with('err','Article published failed to our system, try again');
            }
        }elseif($activeArti == 3){
            return redirect()->back()->with('err','hmm, Article is already pending to review, please review and published it');
        }else {
            return redirect()->back()->with('err','hmm, you are so smart, but this tricks is not working. try again...');
        }
    }

}
