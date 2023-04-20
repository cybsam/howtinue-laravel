<?php

namespace App\Http\Controllers\FrontEnd\Foods;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    public function index(){
        return redirect()->back();
    }
}
