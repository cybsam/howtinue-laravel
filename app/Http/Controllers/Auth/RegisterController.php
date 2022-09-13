<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\VerifyUser;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\MailController;
use Mail;
use App\Mail\EmailVerification;
use Image;
use App\Models\UsersInfoAdmin;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // return Validator::make($data, [
        //     'name' => ['required', 'string', 'max:255'],

        //     'username' => ['required', 'string', 'max:26','unique:users'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'username' => Str::lower($data['username']),
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    function register(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],

            'username' => ['required', 'string','min:5' ,'max:15','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'proimage' =>['required','mimes:jpg,png,jpeg,gif','max:3000'],
            'check' => ['required'],
        ],[
            'proimage.required'=>'Please upload your image',
            'proimage.mimes'=>'We accept: JPG, JPEG, PNG, GIF. Please Upload again',
        ]);

        $users_image = $request->file('proimage');
        $randstr = Str::random('60');
        $new_image_name = $randstr.'.'.$users_image->getClientOriginalExtension();


        $user = new User();
        $user->name = $request->name;
        $user->username = Str::lower($request->username);
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->proimage = $new_image_name;
        $save = $user->save();
        $last_id = $user->id;


        $userContent = "#";
        $userInfo = new UsersInfoAdmin();
        $userInfo->user_id = $last_id;
        $userInfo->about = $userContent;
        $userInfo->company = $userContent;
        $userInfo->jobtitle = $userContent;
        $userInfo->country = $userContent;
        $userInfo->address = $userContent;
        $userInfo->phone = $userContent;
        $userInfo->twitter = $userContent;
        $userInfo->facebook = $userContent;
        $userInfo->instagram = $userContent;
        $userInfo->linkedin = $userContent;
        $saveInfo = $userInfo->save();


        //$lst_id = User::insertGetId();

        $token = $last_id.hash('sha256', \Str::random(120));
        $verifyURL = route('email.verify', ['token'=>$token, 'service'=>'Email_verification']);

        VerifyUser::create([
            'user_id'=>$last_id,
            'token'=>$token,
        ]);
        $formEmail = 'howtiuneautomatedmail@howtiune.com';
        $formName = 'HowTiune Authentication';
        $message = "Dear <b>".$request->name.'</b>';
        $message.= 'Thanks for signin up, we just need you to verify your email address to complete setting up your account.';
        $mail_data = [
            'recipient'=>$request->email,
            'fromEmail'=>$formEmail,
            'fromName'=>$formName,
            'subject'=>'Email Verification',
            'body'=>$message,
            'actionLink'=>$verifyURL,
        ];

        \Mail::send('mail.register-usr',$mail_data, function($message) use($mail_data){
            $message->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'], $mail_data['fromName'])
                    ->subject($mail_data['subject']);
        });

        $new_upload_loca = base_path('public/SupUser/uploads/usersimage/'.$new_image_name);
        Image::make($users_image)->save($new_upload_loca);

        if( $save && $saveInfo ){
            return redirect()->back()->with('regSucc','You need to verify your account, we have sent you an activition link, please check your email.');

        }else {
            return redirect()->back()->with('regFaild','Falled to register our system...');
        }
    }

    public function verify(Request $request){
        $token = $request->token;
        $verifyUser = VerifyUser::where('token', $token)->first();
        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;

            if (!$user->email_verified) {
                $verifyUser->user->email_verified = 1;
                $verifyUser->user->save();
                return redirect()->route('login')->with('info','Your email verified sucesfully, you can login')->with('verifiedEmail',$user->email);
            }else{
                return redirect()->route('login')->with('info','Your email already verified, you can login...')->with('verifiedEmail',$user->email);
            }
        }
    }
}
