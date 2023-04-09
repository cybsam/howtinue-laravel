<?php

namespace App\Http\Controllers\FrontEnd\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(){
        return redirect()->back();
    }
}
