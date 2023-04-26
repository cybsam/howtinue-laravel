<?php

namespace App\Http\Controllers\SupUser\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontsettings;

use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;
use App\Models\User;

class MainSettingsController extends Controller
{
    public function mainSett(){
        return view('SupUserDash.Settings.FrontPage');
    }

    public function mainSetUpdate(Request $request){
        $request->validate([
            'websitename'=>['required'],
            'faviconicon'=>['required','mimes:jpg,png,jpeg,gif,ico'],
            'logoIcon'=>['required','mimes:jpg,png,jpeg,gif,ico'],
            'logoFooter'=>['required','mimes:jpg,png,jpeg,gif,ico']
        ],[
            'websitename.required' => 'Website name is required please enter valid name, its not change many times',
            
            'faviconicon.mimes' => 'We accept: JPG, JPEG, PNG, GIF, ICO. Please Upload again',
            'logoIcon.mimes' => 'We accept: JPG, JPEG, PNG, GIF, ICO. Please Upload again',
            'logoFooter.mimes' => 'We accept: JPG, JPEG, PNG, GIF, ICO. Please Upload again',
        ]);
        $siteName = $request->websitename;
        $Nameslug = Str::slug($siteName);
        //favicon
        $logoFaviconGet = $request->faviconicon;
        $faviconConstName = "favicon";
        $newFaviconName = $faviconConstName.'.'.$logoFaviconGet->getClientOriginalExtension();
        //logo
        $LogoIconGet = $request->logoIcon;
        $logoIconConstName = "logo";
        $newLogoName = $logoIconConstName.'.'.$LogoIconGet->getClientOriginalExtension();
        //logo footer
        $logoIconFooterGet = $request->logoFooter;
        $logoIconFooterCostName = "logo-footer";
        $newLogoFooterName = $logoIconFooterCostName.'.'.$logoIconFooterGet->getClientOriginalExtension();

        //check header

        if ($logoFaviconGet && $LogoIconGet && $logoIconFooterGet) {
            $checkSiteName = frontsettings::where('slug',$Nameslug)->get();

            if ($checkSiteName == false) {
                return redirect()->back()->with('updateErr','Website Name already stored in our system, make sure you change something or you leave this page');
            }else{

                $updateValue = frontsettings::where('slug',$Nameslug)->update([
                    'websitename'=>$siteName,
                    'slug'=>$Nameslug
                ]);
                $imageDB = frontsettings::where('slug',$Nameslug)->get();
                $unlinkFavicon = public_path('FrontEnd/images/favicon/').$imageDB->websitefaviconicon;
                $removeFaviconImg = unlink($unlinkFavicon);
                $unlinkLogo = public_path('FrontEnd/images/icon/').$imageDB->websitemainlogo;
                $removeLogoImg = unlink($unlinkLogo);
                $unlinkFooter = public_path('FrontEnd/images/icon/').$imageDB->websitefooterlogo;
                $removeFooterImg = unlink($unlinkFooter);

                if ($updateValue && $removeFaviconImg && $removeLogoImg && $removeFooterImg) {
                    $userID = Auth::user()->id;
                    $userName = Auth::user()->name;
                    $updateImageLocDB = frontsettings::where('slug',$Nameslug)->update([
                        'websitefaviconicon' => $newFaviconName,
                        'websitemainlogo'=>$newLogoName,
                        'websitefooterlogo'=>$newLogoFooterName,
                        'userid'=>$userID,
                        'username'=>$userName,
                        'updated_at'=>Carbon::now(),
                    ]);

                    $uploadFavicon = public_path('FrontEnd/images/favicon/'.$newFaviconName);
                    Image::make($logoFaviconGet)->save($uploadFavicon);
                    $uploadLogo = public_path('FrontEnd/images/icon/'.$newLogoName);
                    Image::make($LogoIconGet)->save($uploadLogo);
                    $uploadFooterLogo = public_path('FrontEnd/images/icon/'.$newLogoFooterName);
                    Image::make($logoIconFooterGet)->save($uploadFooterLogo);
                    if ($updateImageLocDB) {
                        return redirect()->back()->with('succ','Update successfully, have a relex see you not for mine ;)');
                    }else {
                        return redirect()->back()->with('updateErr','image not uploaded properly, make sure you check it');
                    }

                }
            }
        }else {
            return redirect()->back()->with('updateErr','image not uploaded properly, make sure you check it');
        }
        


    }
}
