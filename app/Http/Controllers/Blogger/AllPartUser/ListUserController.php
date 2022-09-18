<?php

namespace App\Http\Controllers\Blogger\AllPartUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UsersInfoAdmin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ListUserController extends Controller
{
    public function index(){
        $basusers = User::where('role','0')->latest()->get();
        $basUsrCount = $basusers->count();
        return view('BlogUserDash.Users.ListUser',compact('basusers','basUsrCount'));
    }
}
