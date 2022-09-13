<?php

namespace App\Http\Controllers\CybSamDev;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;
class CybDevController extends Controller
{
    public function optimize(){
        $returnCode = Artisan::call('optimize');
        echo "<script>alert('Optimize Succesfully');</script>";
        // return back();
    }
}
