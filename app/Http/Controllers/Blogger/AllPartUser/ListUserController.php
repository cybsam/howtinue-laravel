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
        $SuperAdmin = User::where('role','1')->latest()->get();
        $Blogger = User::where('role','2')->latest()->get();
        $basicUser = User::where('role','0')->latest()->get();
        
        
        return view('BlogUserDash.Users.ListUser',[
            'SuperAdmin'=>$SuperAdmin,
            'Blogger'=>$Blogger,
            'basicUser'=>$basicUser
        ]);
    }

    public function TeamUserList( $nameteam, $teamId){
        // echo $team_name;
        $sepTeamName = $nameteam;
        $teamId = $teamId;
        $usersTeam = usersteam::where('teamname',$sepTeamName)
                                ->where('team_id',$teamId)->get();
        // $teamNameI = TeamName::where('teamname',$nameteam)->get();
        $id = $usersTeam->user_id;
        $userInfo = User::where('id',$id)->first();
        // if ($usersTeam) {
        //     $id = $usersTeam->id;
        //     $userInfo = User::where('id',$id)->first();
        // }
        // $userInfo = $userInfo;
        // echo $teamNameI;
        //echo $nameteam;
        return view('BlogUserDash.Users.TeamUserList',compact('userInfo','sepTeamName','teamId'));
    }

    public function TeamAddUser($teamId,$sepTeamName){
        $teamId = $teamId;
        $sepTeamName = $sepTeamName;
        $basusers = User::where('role','0')->latest()->get();
        $basUsrCount = $basusers->count();

        return view('BlogUserDash.Users.adduser',compact('sepTeamName','teamId','basusers','basUsrCount'));
    }

    public function usersAddToTeam($sepTeamName, $teamId, $username, $user_id){
        $user_name = $username;
        $sepTeamName = $sepTeamName;
        $teamId = $teamId;
        $user_id = $user_id;
        //echo $user_name, $teamId, $user_id, $sepTeamName;
        $checkTeam = TeamName::where('teamname',$sepTeamName)
                            ->where('id',$teamId)->first();
        $userInfo = User::where('id',$user_id)
                            ->where('username',$user_name)->first();

        if ($checkTeam && $userInfo) {
            $adm=$checkTeam->admin_name;
            $teid = $checkTeam->id;
            $temname = $checkTeam->teamname;
            $user_id = $userInfo->id;
            $user_name = $userInfo->username;
            $user_email = $userInfo->email;

            $insertUser = new usersteam();
            $insertUser->teamname = $temname;
            $insertUser->team_id = $teid;
            $insertUser->admin_name = $adm;
            $insertUser->user_id = $user_id;
            $insertUser->user_name = $user_name;
            $insertUser->user_email = $user_email;
            $save = $insertUser->save();

            if ($save) {
                return  redirect()->back()->with('succ','user succesfully add your team');
            }else {
                return redirect()->back()->with('err', 'something went wrong, try again');
            }

        }else {
            return redirect()->back()->with('err','User or Team not matching our sustem, try again');
        }
    }

    //archive user
    public function archive(){
        $userArchive = User::where('block','2')->get();
        return view('BlogUserDash.Users.archiveUser',[
            'userArchive'=>$userArchive
        ]);
    }

    public function archivePost($user_id){
        $user_id = $user_id;
        $archiveNo = 2;
        $userUpdate = User::where('id',$user_id)->update([
            'block'=>$archiveNo
        ]);

        if($userUpdate){
            return redirect()->back()->with('succ','User Archive Done!'); 
        }else {
            return redirect()->back()->with('err','we got some err to User Archive!'); 
        }
    }
    //restore
    public function archivePostRestore($user_id){
        $user_id = $user_id;
        $archiveNo = 0;
        $userUpdate = User::where('id',$user_id)->update([
            'block'=>$archiveNo
        ]);

        if($userUpdate){
            return redirect()->back()->with('succ','User restore Done!'); 
        }else {
            return redirect()->back()->with('err','we got some err to User Restore!'); 
        }
    }
}
