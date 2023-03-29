<?php

namespace App\Http\Controllers\FrontEnd\catagory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuperCatagory;

class ParentCategoryController extends Controller
{
    public function index(){
        $parent = SuperCatagory::where('supcatagory_status', '1')->get();
        return view('FrontEnd.catagory.parentCatagory', compact('parent'));
    }
}
