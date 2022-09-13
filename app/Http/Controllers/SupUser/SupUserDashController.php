<?php

namespace App\Http\Controllers\SupUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UsersInfoAdmin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class SupUserDashController extends Controller
{
    public function index(){
        // $chkUsers = UsersInfoAdmin::where('user_id',Auth::id())->first();
        // $chkAbout = $chkUsers->about;
        // $chkCompany = $chkUsers->about;

        return view('SupUserDash.index');
    }

    public function UserProfile(){
        //profile blade
        $userDetails = UsersInfoAdmin::where('user_id',Auth::id())->first();
        if ($userDetails == null) {
            $errorMsg = 'No Data to show';
            return view('SupUserDash.profile', compact('errorMsg'));

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
        return view('SupUserDash.profile', compact('aboutUser','company','jobtitle','dbCountry','dbAddress','dbPhone','dbTwitter','dbFacebook','dbInstagram','dbLinkedin'));
    }

    public function UserProfileUpdate(Request $request){
        //print_r($request->all());
        $userId = Auth::id();
        // echo $userId;

        if ($userId == $request->userId) {
            $request->validate([
                'changeFullName' => ['required','string','min:5','max:26'],
                'UserAbout' => ['required','string','min:20'],
                'company' => ['required'],
                'jobTitle' => ['required'],
                'country' => ['required'],
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
            // $insertData = new UsersInfoAdmin();
            // $insertData->user_id = $userId;
            // $insertData->about = $request->UserAbout;
            // $insertData->company = $request->company;
            // $insertData->jobtitle = $request->jobTitle;
            // $insertData->country = $request->country;
            // $insertData->address = $request->address;
            // $insertData->phone = $request->phone;
            // $insertData->twitter = $request->twitter;
            // $insertData->facebook = $request->facebook;
            // $insertData->instagram = $request->instagram;
            // $insertData->linkedin = $request->linkedin;
            // $save = $insertData->save();


            if ($updateInfo && $fullNameUpdate) {
                return redirect()->back()->with('success','Your Profile update succesfully, thnaks for update.');
            }else {
                return redirect()->back()->with('logfail','something went wrong, please fillup correct value');
            }

        }else {
            return redirect()->route('supuser.profile.dashboard')->with('updateFail','no way to update your profile');
        }


    }

    public function UserProfileUpdatePass(Request $request){
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

    public function Blank(){
        return view('SupUserDash.blank');
    }
}
