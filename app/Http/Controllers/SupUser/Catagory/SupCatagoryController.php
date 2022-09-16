<?php

namespace App\Http\Controllers\SupUser\Catagory;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\Validator;

class SupCatagoryController extends Controller
{
    public function index(){
        return view('SupUserDash.catagory.SuperCatagory');
    }

    public function insert(){
        return view('SupUserDash.catagory.SuperCatagoryInsert');
    }
}
