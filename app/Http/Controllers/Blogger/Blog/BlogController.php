<?php

namespace App\Http\Controllers\Blogger\Blog;

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
    //index
    public function index(){
        $listBlog = SupUserBlog::where('post_status','0')->get();
        return view('BlogUserDash.blog.index',[
            'listBlog'=>$listBlog
        ]);
    }


    public function BlogInsert(){
        $listCate = SubCatagory::where('catagory_status','0')->get();

        return view('BlogUserDash.blog.insertBlog',[
            'listCate'=>$listCate
        ]);
    }

    //blogsave
    public function BlogInsertSave(Request $request){
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
        if($cateCheck == 0){
            return redirect()->back()->with('blogInsFail','category not found...');
        }else{
            $slug = Str::slug($request->blogName);
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

    //show my blog
    public function BlogMyShow(){
        $authId = Auth::id();
        $myBlog = SupUserBlog::where('userid',$authId)->get();
        return view('BlogUserDash.blog.myblog',[
            'myBlog'=>$myBlog
        ]);
    }

    //pending blog
    public function pendingBlog(){
        $penArticle = SupUserBlog::where('post_status','3')->get();
        return view('BlogUserDash.blog.pendingBlog',[
            'penArticle'=>$penArticle
        ]);
    }
    public function pendingBlogShow($blog_id){
        $blog_id = $blog_id;
        $showData = SupUserBlog::where('id',$blog_id)->first();
        $PendingBlogCount= $showData->count();
        return view('BlogUserDash.blog.showPendingBlog',[
            'showData'=>$showData,
            'PendingBlogCount'=>$PendingBlogCount
        ]);
    }

    public function pendingBlogShowUpdate(Request $request){
        $id = $request->__articleid;
        $activeArti = $request->__articleActivate;
        if ($activeArti == 0) {
            $updateStatus = SupUserBlog::where('id',$id)->update([
                'post_status'=>$activeArti,
                'updated_at'=>Carbon::now()
            ]);
            if ($updateStatus) {
                return redirect()->route('BlogUser.Insert')->with('succ','Article is live now, check it...');
            }else {
                return redirect()->back()->with('err','Article published failed to our system, try again');
            }
        }elseif($activeArti == 3){
            return redirect()->back()->with('err','Article already pending for review, please check and published or delete');
        
        }else {
            return redirect()->back()->with('err','hmm, you are so smart, but this tricks is not working. try again...');
        }
    }
    
}
