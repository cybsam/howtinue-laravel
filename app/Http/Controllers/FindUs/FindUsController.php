<?php

namespace App\Http\Controllers\FindUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\FindUs;

class FindUsController extends Controller
{
    // backend find
    public function SocialFind(){
        $id = 1;
        $socialBlog = FindUs::where('id',$id)->first();
        return view('SupUserDash.socialFind.findUsSocial',[
            'socialBlog'=>$socialBlog
        ]);
    }

    //update

    public function SocialFindUpdate(Request $request){
        $request->validate([
            '__facebook'=>['required'],
            '__twitter'=>['required'],
            '__whatsapp'=>['required'],
            '__linkedin'=>['required'],
            '__reddit'=>['required'],
            '__telegram'=>['required'],
        ],[
            '__facebook.required' => 'leave it blank then type ( # )',
            '__twitter.required' => 'leave it blank then type ( # )',
            '__whatsapp.required' => 'leave it blank then type ( # )',
            '__linkedin.required' => 'leave it blank then type ( # )',
            '__reddit.required' => 'leave it blank then type ( # )',
            '__telegram.required' => 'leave it blank then type ( # )',
        ]);
        $id = 1;
        $updateSocial = FindUs::where('id',$id)->update([
            'facebook'=>$request->__facebook,
            'twitter'=>$request->__twitter,
            'whatsapp'=>$request->__whatsapp,
            'linkedin'=>$request->__linkedin,
            'reddit'=>$request->__reddit,
            'telegram'=>$request->__telegram,
            'updated_at'=>Carbon::now()
        ]);

        if ($updateSocial) {
            return redirect()->back()->with('succ','Social Find us updated');
        }else {
            return redirect()->back()->with('err','failed to update social find');
        }

    }
}
