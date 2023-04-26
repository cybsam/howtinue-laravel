<?php

namespace App\Http\Controllers\Auth;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo(){
        if(Auth()->user()->role == 1){
            return route('supuser.dashboard');
        }elseif (Auth()->user()->role == 2) {
            return route('blogusr.dashboard');
        }elseif (Auth()->user()->role == 0) {
            return route('basUser.dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // protected function credentials(Request $request){
    //     if($request->get('username')){
    //         return ['username'=>$request->get('email'), 'password'=>$request->get('password')];
    //     }
    //     return $request->only($this->username(),'password');
    // }

    // working function
    public function login(Request $request){
        $input = $request->all();
        $this->validate($request, [
            //'username' => 'required|username',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // 'username'=>$input['username'],
        if(Auth()->attempt(array('email'=>$input['email'],'password'=>$input['password']))){
            if(Auth()->user()->role == 1){
                if (Auth()->user()->block == 0) {
                    return redirect()->route('supuser.dashboard');
                }else {
                    return redirect()->route('login')->with('logfaild','User Suspended by admin, contact admin to release!');
                }
                
            }elseif (Auth()->user()->role == 2) {
                if (Auth()->user()->block == 0) {
                    return redirect()->route('blogusr.dashboard');
                }else {
                    return redirect()->route('login')->with('logfaild','User Suspended by admin, contact admin to release!');
                }
                
            }elseif (Auth()->user()->role == 0) {
                if (Auth()->user()->block == 0) {
                    return redirect()->route('basUser.dashboard');
                }else {
                    return redirect()->route('login')->with('logfaild','User Suspended by admin, contact admin to release!');
                }
                
            }
        }else {
            return redirect()->route('login')->with('logfaild','Wrong Credentials, try again...');
        }

        // $user = Auth()->user()->where('email','=', $request->email)->first();

        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         $user()->name;
        //     }else {
        //         return redirect()->route('login')->with('password','password not match.');
        //     }
        // }else {
        //     return redirect()->route('login')->with('email','Email not found our system.');
        // }
    }




}
