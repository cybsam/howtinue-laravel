<?php

namespace App\Http\Controllers\BasUser\Activity;

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
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function UserActivity(){
        $AuthId = Auth::id();
        $blog = DB::table('sup_user_blogs')->where('userid',$AuthId)->latest()->get();

        $comments = DB::table('comments')->where('commenter_id',$AuthId)->latest()->get();

        return view('BasUsrDash.activity.activity',[
            'blog'=>$blog,
            'comments'=>$comments
        ]);
    }

    public function ArticleActivity(){

    }
}
