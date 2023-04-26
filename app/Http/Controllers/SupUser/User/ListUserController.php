<?php

namespace App\Http\Controllers\SupUser\User;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\usersteam;



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
        return view('SupUserDash.users.updateSup');
    }

    //archive users
    public function ArchiveUserFrom($user_id){
        $user_id = $user_id;
        $role = 7;
        $getUser = User::where('id',$user_id)->update([
            'role'=>$role
        ]);
        if ($getUser) {
            return redirect()->back()->with('succ','User archive done!');
        }else {
            return redirect()->back()->with('err','we got some error to archive user!');
        }

    }

    public function ArchiveUser(){
        $archiveUsers = User::where('role','7')->get();
        return view('SupUserDash.users.archive',[
            'archiveUsers'=>$archiveUsers
        ]);
    }

    public function ArchiveUserRestore($user_id){
        //copde
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
        //cpode
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
}
