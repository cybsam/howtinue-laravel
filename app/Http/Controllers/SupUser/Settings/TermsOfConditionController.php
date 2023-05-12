<?php

namespace App\Http\Controllers\SupUser\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TermsOfCondition;

class TermsOfConditionController extends Controller
{
    public function showViewDeteils(){
        $previewTerms = TermsOfCondition::where('id',1)->first();
        return view('SupUserDash.Settings.termsofcondition',[
            'previewTerms'=>$previewTerms
        ]);
    }

    public function showViewDeteilsUpdate(Request $request){
        $request->validate([
            'description'=>['required','min:200']
        ],[
            'description.required'=>'type your website terms and condition rules and regulation'
        ]);

        $updateterms = TermsOfCondition::where('id',1)->update([
            'description'=>$request->description
        ]);
        if ($updateterms) {
            return redirect()->back()->with('updSuc','Terms of condition page update successfully');
        }else {
            return redirect()->back()->with('updErr','Oops, Generate some error to update about us page, try again...');
        }

    }
}
