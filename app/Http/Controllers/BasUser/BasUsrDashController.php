<?php

namespace App\Http\Controllers\BasUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UsersInfoAdmin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class BasUsrDashController extends Controller
{
    public function index(){
        return view('BasUsrDash.index');
    }

    //profile
    public function Profile(){
        $userDetails = UsersInfoAdmin::where('user_id',Auth::id())->first();
        if ($userDetails == null) {
            $errorMsg = 'No Data to show';
            return view('BasUsrDash.users.profile', compact('errorMsg'));

        }else {
            $aboutUser = $userDetails->about;
            $company = $userDetails->company;
            $jobtitle = $userDetails->jobtitle;
            $dbCountry = $userDetails->country;
            $dbAddress = $userDetails->address;
            $dbPhone = $userDetails->phone;
            $dbTwitter = $userDetails->twitter;
            $dbFacebook = $userDetails->facebook;
            $dbInstagram = $userDetails->instagram;
            $dbLinkedin = $userDetails->linkedin;


        }
        return view('BasUsrDash.users.profile',[
            'aboutUser'=>$aboutUser,
            'company'=>$company,
            'jobtitle'=>$jobtitle,
            'dbCountry'=>$dbCountry,
            'dbAddress'=>$dbAddress,
            'dbPhone'=>$dbPhone,
            'dbTwitter'=>$dbTwitter,
            'dbFacebook'=>$dbFacebook,
            'dbInstagram'=>$dbInstagram,
            'dbLinkedin'=>$dbLinkedin
        ]);
    }
    //update profile
    public function ProfileUpdate(){
        $userDetails = UsersInfoAdmin::where('user_id',Auth::id())->first();
        if ($userDetails == null) {
            $errorMsg = 'No Data to show';
            return view('BasUsrDash.users.profile', compact('errorMsg'));

        }else {
            $aboutUser = $userDetails->about;
            $company = $userDetails->company;
            $jobtitle = $userDetails->jobtitle;
            $dbCountry = $userDetails->country;
            $dbAddress = $userDetails->address;
            $dbPhone = $userDetails->phone;
            $dbTwitter = $userDetails->twitter;
            $dbFacebook = $userDetails->facebook;
            $dbInstagram = $userDetails->instagram;
            $dbLinkedin = $userDetails->linkedin;


        }
        return view('BasUsrDash.users.profileupdate',[
            'aboutUser'=>$aboutUser,
            'company'=>$company,
            'jobtitle'=>$jobtitle,
            'dbCountry'=>$dbCountry,
            'dbAddress'=>$dbAddress,
            'dbPhone'=>$dbPhone,
            'dbTwitter'=>$dbTwitter,
            'dbFacebook'=>$dbFacebook,
            'dbInstagram'=>$dbInstagram,
            'dbLinkedin'=>$dbLinkedin
        ]);
    }

    //update profile
    public function ProfileUpdateSave(Request $request){
        $userId = Auth::id();
        if ($userId == $request->userId) {
            $request->validate([
                'changeFullName' => ['required','string','min:5','max:26'],
                'UserAbout' => ['required','string','min:20'],
                'company' => ['required'],
                'jobTitle' => ['required'],
                'country' => ['required','string'],
                'address' => ['required', 'min:7'],
                'phone' => ['required'],
                'twitter' => ['required'],
                'facebook' => ['required'],
                'instagram' => ['required'],
                'linkedin' => ['required'],
            ],[
                'changeFullName.required' => 'Please Enter Your Full Name min:5',
                'UserAbout.required' => 'write about your self min:20 cherecter',
                'company.required' => 'if you are not an employee then type #',
                'jobTitle.required' => 'yor are not a employee then type #',
                'phone.required' => 'you have any mobile number',
                'twitter.required' => 'if you are not in Twitter then type #',
                'facebook.required' => 'if you are not in facebook then type #',
                'instagram.required' => 'you are not in instagram then type #',
                'linkedin.required' => 'you are not in linkedin then type #',
            ]);

            $fullNameUpdate = User::find($userId)->update([
                'name' => $request->changeFullName
            ]);
            $updateInfo = UsersInfoAdmin::where('user_id',$userId)->update([
                'about' => $request->UserAbout,
                'company' => $request->company,
                'jobtitle' => $request->jobTitle,
                'country' => $request->country,
                'address' => $request->address,
                'phone' => $request->phone,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'linkedin' => $request->linkedin,
            ]);

            if ($updateInfo && $fullNameUpdate) {
                return redirect()->back()->with('success','Your Profile update succesfully, thnaks for update.');
            }else {
                return redirect()->back()->with('logfail','something went wrong, please fillup correct value');
            }

        }else {
            return redirect()->route('basUser.profileUpdate')->with('updateFail','no way to update your profile');
        }

    }

    //update password
    public function ProfileUpdatePassword(){
        $userDetails = UsersInfoAdmin::where('user_id',Auth::id())->first();
        if ($userDetails == null) {
            $errorMsg = 'No Data to show';
            return view('BasUsrDash.users.profile', compact('errorMsg'));

        }else {
            $aboutUser = $userDetails->about;
            $company = $userDetails->company;
            $jobtitle = $userDetails->jobtitle;
            $dbCountry = $userDetails->country;
            $dbAddress = $userDetails->address;
            $dbPhone = $userDetails->phone;
            $dbTwitter = $userDetails->twitter;
            $dbFacebook = $userDetails->facebook;
            $dbInstagram = $userDetails->instagram;
            $dbLinkedin = $userDetails->linkedin;

        }
        return view('BasUsrDash.users.updPass',[
            'dbTwitter'=>$dbTwitter,
            'dbFacebook'=>$dbFacebook,
            'dbInstagram'=>$dbInstagram,
            'dbLinkedin'=>$dbLinkedin
        ]);
        
    }

    //save
    public function ProfileUpdatePasswordsave(Request $request){
        $request->validate([
            'oldpassword'=>'required',
            'password'=>'required|confirmed|min:8',
            'password_confirmation'=>'required',
        ]);
        if ($request->oldpassword == $request->password) {
            return back()->withErrors("Password:- Your New password can not be your old password");
        }
        $oldPassFromUser = $request->oldpassword;
        $passFromDatabase = Auth::user()->password;
        if (Hash::check($oldPassFromUser, $passFromDatabase)) {
            User::find(Auth::id())->update([
                'password' => Hash::make($request->password)
            ]);
        }else {
            return back()->withErrors("Password:- Your old password is not correct, please try again.");
        }
        return back()->with('success','Your Password Update Succesfully...');
    }

    //contact admin page
    public function adminContactIndex(){
        return view('BasUsrDash.contactadmin');
    }


}
