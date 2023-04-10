<?php

namespace App\Http\Controllers\FrontEnd\Share;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuperCatagory;
use App\Models\SubCatagory;
use App\Models\SupUserBlog;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Image;


class ShareController extends Controller
{
    public function facebook($sharelink){
        $link = $sharelink;
        echo $link;
        
    }
}
