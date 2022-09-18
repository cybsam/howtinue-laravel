<?php

namespace App\Http\Controllers\Blogger\AllPartUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\usersteam;

use App\Models\UsersInfoAdmin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class TeamUserController extends Controller
{
    public function index(){
        return view('BlogUserDash.Users.TeamUser');
    }

    public function NewTeam(){
        return view('BlogUserDash.Users.NewTeam');
    }
}
