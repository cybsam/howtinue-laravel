<?php

namespace App\Http\Controllers\FrontEnd\Beauty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeautyController extends Controller
{
    public function index(){
        return redirect()->back();
    }
}
