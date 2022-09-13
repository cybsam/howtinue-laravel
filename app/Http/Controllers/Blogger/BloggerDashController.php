<?php

namespace App\Http\Controllers\Blogger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BloggerDashController extends Controller
{
    public function index(){
        return view('BlogUserDash.index');
    }
}
