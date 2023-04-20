<?php

namespace App\Http\Controllers\Blogger\AllPartUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\usersteam;
use App\Models\TeamName;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class TeamUserController extends Controller
{
    public function index(){
        $teamInfo = TeamName::where('admin_id',Auth::id())->get();
        
        if ($teamInfo == null) {
            $err = 'no team found, create new one';
            return view('BlogUserDash.Users.TeamUser', compact('err'));
        }
        // else {
        //     $teamname = $userInfo->teamname;
        //     $adminName = $userInfo->admin_name;
        //     $adminEmail = $userInfo->admin_email;
        //     $teamStatus = $userInfo->teamstatus;
        // }
        return view('BlogUserDash.Users.TeamUser', compact('teamInfo'));
    }

    public function NewTeam(){
        return view('BlogUserDash.Users.NewTeam');
    }

    public function NewTeamInsert(Request $request){
        $request->validate([
            'teamname' => ['required','unique:team_names'],
        ],[
            'teamname.required' => 'Team name must be require',
            'teamname.unique' => 'Team Already Found, try another one, or rechek',
        ]);
        $adminId = Auth::user()->id;
        $adminName = Auth::user()->name;
        $adminEmail = Auth::user()->email;

        //print_r($request->all());
        if ($adminId == $request->admin_id && $adminName == $request->admin_name && $adminEmail == $request->admin_email) {
            $insertData = new TeamName();
            $insertData->teamname = $request->teamname;
            $insertData->admin_name = $adminName;
            $insertData->admin_id = $adminId;
            $insertData->admin_email = $adminEmail;
            $save = $insertData->save();

            if ($save) {
                return redirect()->route('blogusr.users.allteam')->with('success','New team create succesfully');
            }else {
                return back()->withErrors('wronginfo','something went wrong...try again');
            }
            
        }else {
            return back()->withErrors('wronginfo','moderator information wrong');
        }
    }
    public function showData(){
        return 'sam';
    }
}
