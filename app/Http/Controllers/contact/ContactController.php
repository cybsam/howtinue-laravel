<?php

namespace App\Http\Controllers\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function contactSave(Request $request){
        $request->validate([
            'name' => ['required'],
            'email'=> ['required'],
            
            'subject'=> ['required'],
            'message'=> ['required'],
        ],[
            'name.required'=> 'hmm, what is your name?',
            'email.required'=> 'Email address please!',
            'subject.required'=> 'tell us something what do you want',
            'message.required'=> 'hmm, Describe your opinion',
            
        ]);

        $insContact = new Contact();
        $insContact->anonymouse_name = $request->name;
        $insContact->anonymouse_email = $request->email;
        $insContact->anonymouse_website = $request->website;
        $insContact->anonymouse_subject = $request->subject;
        $insContact->anonymouse_message = $request->message;
        $insSave = $insContact->save();

        if ($insSave) {
            return redirect()->back()->with('insSucc','Thanks for contact us, hope you will get replay soon, check your email...');
        }else {
            return redirect()->back()->with('insFail','oops, our system got some error to save your message! try again...');
        }


    }
    //super suer
    public function showSupUser(){
        $showContact = Contact::latest()->get();
        return view('SupUserDash.frontContact.frontCon',[
            'showContact'=>$showContact
        ]);
    }
    
    //blogger
    public function showBlogUser(){
        $showContact = Contact::latest()->get();
        return view('BlogUserDash.contact.frontContact',[
            'showContact'=>$showContact
        ]);
    }
}
