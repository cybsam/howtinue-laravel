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

class ActivityController extends Controller
{
    public function UserActivity(){
        return view('BasUsrDash.activity.activity');
    }

    public function ArticleActivity(){

    }
}
