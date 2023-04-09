<?php

namespace App\Http\Controllers\FrontEnd\Mind;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MindController extends Controller
{
    public function index(){
        return redirect()->back();
    }
}
