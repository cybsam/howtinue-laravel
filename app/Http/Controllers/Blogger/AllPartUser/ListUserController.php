<?php

namespace App\Http\Controllers\Blogger\AllPartUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UsersInfoAdmin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\usersteam;
use App\Models\TeamName;

class ListUserController extends Controller
{
    public function index(){
        $basusers = User::where('role','0')->latest()->get();
        $basUsrCount = $basusers->count();
        return view('BlogUserDash.Users.ListUser',compact('basusers','basUsrCount'));
    }

    public function TeamUserList($nameteam){
        // echo $team_name;
        $teamNameI = TeamName::where('teamname',$nameteam)->get();
        // echo $teamNameI;
        echo $nameteam;
        return view('BlogUserDash.Users.TeamUserList',compact('teamNameI'));
    }

    public function TeamAddUser($name_user){
        
        // echo $name_user;
        $getUserName = $name_user;

        $getUserInfo = User::where('username',$getUserName)->first();
        // print_r($getUserInfo);
        $userId = $getUserInfo->id;
        // echo $userTwitter;

        $userInfo = UsersInfoAdmin::where('user_id',$userId)->first();
        // echo $userInfo->country;
        // echo "<hr>";
        // print_r($userInfo);

        return view('BlogUserDash.Users.edituser',compact('userInfo'));
    }
}
