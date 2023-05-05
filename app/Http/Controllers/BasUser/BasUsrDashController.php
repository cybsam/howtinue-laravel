<?php

namespace App\Http\Controllers\BasUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class BasUsrDashController extends Controller
{
    public function index(){
        return view('BasUsrDash.index');
    }

    //profile
    public function Profile(){
        return view('BasUsrDash.profile');
    }
}
