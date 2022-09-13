<?php

namespace App\Http\Controllers\SupUser\User;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;



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


        return view('SupUserDash.users.index', compact('SupUsers','blogUsers','basusers','SupUsersCount','blogUsersCount','basUsrCount'));

        // return Datatables::of(User::query())->make(true);





        // return view('SupUserDash.users.index', compact('blogUsers','basusers'));

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
