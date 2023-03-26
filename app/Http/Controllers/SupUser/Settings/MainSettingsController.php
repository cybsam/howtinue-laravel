<?php

namespace App\Http\Controllers\SupUser\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainSettingsController extends Controller
{
    public function mainSett(){
        return view('SupUserDash.Settings.FrontPage');
    }
}
