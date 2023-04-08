<?php

namespace App\Http\Controllers\FrontEnd\catagory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCatagory;
class CatagoryIndexController extends Controller
{
    public function index(){
        $listCata = SubCatagory::where('catagory_status','0')->get();
        return view('FrontEnd.catagory.index',[
            'listCata'=>$listCata
        ]);
    }

    public function postList(){
        return "ok";
    }
    
}
