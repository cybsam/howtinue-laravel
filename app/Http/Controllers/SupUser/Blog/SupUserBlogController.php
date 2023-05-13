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
use App\Models\Tag;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;


class SupUserBlogController extends Controller
{
    //index/list
    public function index(){
        $articleShow = SupUserBlog::all();

        // $tags = Tag::all();
        // $eploidTag = explode(',',$tags);
        // foreach ($articleShow as $singleArticle) {
        //     $countView = views($singleArticle)->count();
        // }


        return view('SupUserDash.blog.index',[
            'articleShow'=>$articleShow,
            // 'eploidTag',$eploidTag,

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
            'blogTags' => ['required', 'min:3'],
            'blogMeta' => ['required','max:255'],
            'blogMetaDesc' => ['required'],
            'image' => ['required','mimes:jpg,png,jpeg,gif','max:3000'],
            'description' => ['required']
        ],[
            'blogName.required' => 'type your article name!',
            'blogShortDesc.required' => 'type your article short description.',
            'blogTags.required' => 'Article tags required',
            'blogMeta.required' => 'Article meta title required.',
            'blogMetaDesc.required' => 'article meta description required.',
            'image.required' => 'Article image require',
            'description.required' => 'hmm, what do you think',
        ]);





        $catagory = $request->category;
        $subcagaCheck = SubCatagory::where('id', $catagory)->first();
        $sub_category_name = $subcagaCheck->subcatagoryname;
        $categoryName = $subcagaCheck->supcatanameslug;


        $authId = Auth::id();
        $UserName = Auth::user()->name;

        $localTime = Carbon::now()->format('Y-m-d-H-i-s-u');



        $cataImage = $request->file('image');

        $newImageName =$localTime.'.'.$cataImage->getClientOriginalExtension();
        $cateCheck = $request->category;

        // $inputtag = $request->blogTags;
        // $tags = explode(',',$request->blogTags);
        // $tagsRaw = $request->blogTags;

        // $insTag = new Tag;
        // $insTag->taggable_id = 1;
        // $insTag->tag = $tagsRaw;
        // $insTag->save();
        // die();


        $slug = Str::slug($request->blogName);

        if($cateCheck == '0'){
            return redirect()->back()->with('blogInsFail','category not found...');
        }else{
            $checkPost = SupUserBlog::where('slug',$slug)->first();

            $subCateSlag = Str::slug($sub_category_name);

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
                $insBlog->userid = $authId;
                $insBlog->username = $UserName;
                $insBlog->created_at = Carbon::now();
                $save = $insBlog->save();


                // $lastId = $insBlog->id;
                // $save->tag($tags);


                $uploadLocation = base_path('public/uploads/postimage/'.$newImageName);
                Image::make($cataImage)->resize(800,500)->save($uploadLocation);


                if ($save) {
                    return redirect()->back()->with('blogInsSucc','hurray, Article is now live. check it now!');
                }else{
                    return redirect()->back()->with('blogInsFail','hmmm, Article insert failed, we got some error...');
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
            $updateStatus = SupUserBlog::where('id',$id)->update([
                'post_status'=>$activeArti,
                'updated_at'=>Carbon::now()
            ]);
            if ($updateStatus) {
                return redirect()->back()->with('err','Article is now blocked...');
            }else {
                return redirect()->back()->with('err','Article published failed to our system, try again');
            }

        }else {
            return redirect()->back()->with('err','hmm, you are so smart, but this tricks is not working. try again...');
        }
    }

}
