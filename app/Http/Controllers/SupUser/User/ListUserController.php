<?php

namespace App\Http\Controllers\SupUser\User;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\usersteam;
use Illuminate\Support\Facades\Auth;



class ListUserController extends Controller
{
    public function index(Request $request){

        // $admins = User::where('role');


        $users = User::all();

        //seperate data form role
        $SupUsers = User::where('role', '1')->latest()->get();
        $SupUsersCount = $SupUsers->count();
        $blogUsers = User::where('role', '2')->latest()->get();
        $blogUsersCount = $blogUsers->count();
        $basusers = User::where('role','0')->latest()->get();
        $basUsrCount = $basusers->count();

        //$userTeam = usersteam::all();


        return view('SupUserDash.users.index', compact('SupUsers','blogUsers','basusers','SupUsersCount','blogUsersCount','basUsrCount'));

        // return Datatables::of(User::query())->make(true);





        // return view('SupUserDash.users.index', compact('blogUsers','basusers'));

    }

    //update superuser
    public function SupUserUpdate($user_id){
        $user_id = $user_id;
        $userInfo = User::where('id',$user_id)->first();
        return view('SupUserDash.users.updateSup',[
            'userInfo'=>$userInfo
        ]);
    }
    //save update
    public function SupUserUpdateSave(Request $request){
        $userId = $request->__userid;
        $userRole = $request->__userRole;
        $activeStatus = $request->__userActivate;
        $authId = Auth::id();
        $userName = Auth::user()->name;
        if($userRole == 0 || $userRole == 1 || $userRole == 2){
            if ($activeStatus == 1 || $activeStatus == 2) {
                $updateUser = User::where('id',$userId)->update([
                    'role'=>$userRole,
                    'updated_by'=>$userName,
                    'email_verified'=>$activeStatus
                ]);
                if ($updateUser) {
                    return redirect()->route('supuser.listuser')->with('succ','User update successfully...');
                }else {
                    return redirect()->back()->with('err','Failed to update user');
                }
            }else {
                return redirect()->back()->with('err','Oversmart, ha ha ha');
            }
            
        }else {
            return redirect()->back()->with('err','Please select user role,');
        }

        
    }

    //archive users
    public function ArchiveUserFrom($user_id){
        $user_id = $user_id;
        $block = 2;
        $getUser = User::where('id',$user_id)->update([
            'block'=>$block
        ]);
        if ($getUser) {
            return redirect()->back()->with('succ','User archive done!');
        }else {
            return redirect()->back()->with('err','we got some error to archive user!');
        }

    }

    public function ArchiveUser(){
        $archiveUsers = User::where('block','2')->get();
        return view('SupUserDash.users.archive',[
            'archiveUsers'=>$archiveUsers
        ]);
    }

    public function ArchiveUserRestore($user_id){
        $user_id = $user_id;
        $block = 0;
        $getUser = User::where('id',$user_id)->update([
            'block'=>$block
        ]);
        if ($getUser) {
            return redirect()->back()->with('succ','User Restore done!');
        }else {
            return redirect()->back()->with('err','we got some error to Restore user!');
        }
    }

    //block users
    public function BlockUserFrom($user_id){
        $user_id = $user_id;
        $block = 1;
        $getUserBlock = User::where('id',$user_id)->update([
            'block'=>$block
        ]);
        if ($getUserBlock) {
            return redirect()->back()->with('succ','User Block done!');
        }else {
            return redirect()->back()->with('err','we got some error to block user!');
        }
    }
    public function BlockUser(){
        $blockUsers = User::where('block','1')->get();
        return view('SupUserDash.users.block',[
            'blockUsers'=>$blockUsers
        ]);
    }

    

    public function BlockUserRestore($user_id){
        $user_id = $user_id;
        $block = 0;
        $getUser = User::where('id',$user_id)->update([
            'block'=>$block
        ]);
        if ($getUser) {
            return redirect()->back()->with('succ','User Restore done!');
        }else {
            return redirect()->back()->with('err','we got some error to Restore user!');
        }
    }



    // public function SupUser(Request $request){


    //     if ($request->ajax()) {
    //         $SupUsers = User::where('role', '1')->latest()->get();
    //         return Datatables::of($SupUsers)
    //             ->addIndexColumn()
    //             ->addColumn('action', function($row){
    //                 $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
    //                 return $actionBtn;
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }


    // }

    // public function Blogger(Request $request){


    //     if ($request->ajax()) {
    //         $SupUsers = User::where('role', '1')->latest()->get();
    //         return Datatables::of($SupUsers)
    //             ->addIndexColumn()
    //             ->addColumn('action', function($row){
    //                 $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
    //                 return $actionBtn;
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }


    // }

    // public function Basuser(Request $request){


    //     if ($request->ajax()) {
    //         $SupUsers = User::where('role', '1')->latest()->get();
    //         return Datatables::of($SupUsers)
    //             ->addIndexColumn()
    //             ->addColumn('action', function($row){
    //                 $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
    //                 return $actionBtn;
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }


    // }


    //update user

    // public function userUpdateSingle($user_id){
    //     $user_id = $user_id;
    // }
}
