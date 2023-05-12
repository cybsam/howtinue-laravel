<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    public function indexFrontEnd(){
        // $id = 1;
        $valuableTeamMember = User::where('role',1)
                                    ->orWhere('role',2)
                                    ->where('email_verified',1)
                                    ->inRandomOrder()
                                    ->take(4)
                                    ->get();

        $fetchAbout = AboutUs::where('id',1)->first();

        return view('FrontEnd.pages.about-us',[
            'fetchAbout'=>$fetchAbout,
            'valuableTeamMember'=>$valuableTeamMember
        ]);
    }

    public function backEndIndex(){
        $previewAbout = AboutUs::where('id',1)->first();
        return view('SupUserDash.Settings.aboutus',[
            'previewAbout'=>$previewAbout
        ]);
    }

    public function backEndAboutUpdate(Request $request){
        $request->validate([
            'description'=>['required','min:200']
        ],[
            'description.required' => 'Please tell us something how find on internet'
        ]);

        $id = 1;
        $update = AboutUs::where('id',1)->update([
            'description'=>$request->description
        ]);

        if ($update) {
            return redirect()->back()->with('updSuc','About Us page update successfully');
        }else {
            return redirect()->back()->with('updErr','Oops, Generate some error to update about us page, try again...');
        }

        // dd($request->description);
    }
}
