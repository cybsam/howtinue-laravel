<?php

namespace App\Http\Controllers\SupUser\Blog;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\SuperCatagory;
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
        return view('SupUserDash.blog.insert');
    }
}
