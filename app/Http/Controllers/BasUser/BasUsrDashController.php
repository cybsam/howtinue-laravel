<?php

namespace App\Http\Controllers\BasUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasUsrDashController extends Controller
{
    public function index(){
        return view('BasUsrDash.index');
    }
}
