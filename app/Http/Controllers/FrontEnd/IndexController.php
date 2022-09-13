<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(){
        return view('FrontEnd.index');
    }

    public function blank(){
        return view('FrontEnd.blank');
    }
}
