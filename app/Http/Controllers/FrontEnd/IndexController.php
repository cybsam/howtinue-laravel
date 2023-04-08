<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuperCatagory;
use App\Models\SubCatagory;
use App\Models\SupUserBlog;

use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;

class IndexController extends Controller
{
    public function Index(){
        $currentDate = Carbon::now()->format('l, j F Y');
        $listBlog = SupUserBlog::where('post_status','0')->latest()->get();
        return view('FrontEnd.index', compact('listBlog','currentDate'));
    }

    public function blank(){
        return view('FrontEnd.blank');
    }

    public function contact(){
        return view('FrontEnd.contact.contact');
    }
}
