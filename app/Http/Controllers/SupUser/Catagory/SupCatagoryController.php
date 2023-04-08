<?php

namespace App\Http\Controllers\SupUser\Catagory;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\SuperCatagory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SupCatagoryController extends Controller
{
    public function index(){
        $listCatagory = SuperCatagory::where('supcatagory_status','1')->latest()->get();

        return view('SupUserDash.catagory.SuperCatagory', compact('listCatagory'));
    }

    public function insert(){
        return view('SupUserDash.catagory.SuperCatagoryInsert');
    }
    

    public function insertCheck(Request $request){
        //$catagoryName = $request->catagory->catagoryname;
        $authId = Auth::id();
        $UserName = Auth::user()->name;
        

        $request->validate([
            'catagoryname' => ['required','string','min:3', 'max:20'],
            'catagorymeta' => ['required', 'string', 'min:3', 'max:20'],
            'image' => ['required','mimes:jpg,png,jpeg,gif','max:3000'],
        ],[
            'catagoryname.required' => 'Catagory name field can not be empty!',
            'catagorymeta.required' => 'Catagory Mega tag is required',
            'image.required' => 'Please upload catagory image...',
            'image.mimes' => 'We accept: JPG, JPEG, PNG, GIF. Please Upload again',
        ]);

        $cataImage = $request->file('image');
        $catNam = $request->catagoryname;
        $newImageName = $catNam.'.'.$cataImage->getClientOriginalExtension();

        $checkCata = SuperCatagory::where('supcatagoryname',$catNam)->first();

        if ($checkCata == true) {
            return redirect()->back()->with('erro','Super Catatory already available in our system, check now!');
        }else {
            $slug = Str::slug($request->catagoryname);
            $insCatagory = new SuperCatagory();
            $insCatagory->slug = $slug;
            $insCatagory->supcatagoryname = $request->catagoryname;
            $insCatagory->supcatagoryimage = $newImageName;
            $insCatagory->supcatagory_meta_tag = $request->catagorymeta;
            $insCatagory->userid = $authId;
            $insCatagory->username = $UserName;
            $save = $insCatagory->save();

        //upload location
            $uploadLocation = base_path('public/SupUser/uploads/superCatagoryImage/'.$newImageName);
            Image::make($cataImage)->save($uploadLocation);

            if ($save){
                return redirect()->back()->with('succ','new super catagory insert succesfully,');
            }else{
                return redirect()->back()->with('erro','insert catagory failed, we got some error...');
            }
        }

        



    }

    //update
    public function catagoryUpdate($cataId){
        $id = $cataId;
        return $id;
        
    }

    //archive
    public function Archive(){
        return view('SupUserDash.catagory.SuperCatagoryArchive');
    }

    public function catagoryArchive($cataId){
        $id = $cataId;
        return $id;
    }
}
