<?php

namespace App\Http\Controllers\Blogger\Category;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\SuperCatagory;
use App\Models\SubCatagory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(){

        $cateGory = SubCatagory::where('catagory_status',0)->get();

        return view('BlogUserDash.category.index',[
            'cateGory'=>$cateGory
        ]);
    }

    //my category
    public function myCategory(){

        $authId = Auth::id();

        $cateGory = SubCatagory::where('userid',$authId)->get();

        return view('BlogUserDash.category.mycategory',[
            'cateGory'=>$cateGory
        ]);
    }

    //insert
    public function Insert(){
        $supCata = SuperCatagory::where('supcatagory_status','1')->get();
        return view('BlogUserDash.category.insert',[
            'supCata'=>$supCata
        ]);
    }

    //save
    public function InsertSave(Request $request){
        $authId = Auth::id();
        $UserName = Auth::user()->name;
        

        $request->validate([
            'supCataId' => ['required'],
            'subcatagoryname' => ['required','string',  'min:3', 'max:200'],
            'catagorymeta' => ['required', 'string', 'min:3', 'max:200'],
            'image' => ['required','mimes:jpg,png,jpeg,gif','max:3000'],
        ],[
            'supCataId.required' => 'Please Select Super/Main Catagory',
            'subcatagoryname.required' => 'Catagory name field can not be empty!',
            'catagorymeta.required' => 'Catagory Mega tag is required',
            'image.required' => 'Please upload catagory image...',
            'image.mimes' => 'We accept: JPG, JPEG, PNG, GIF. Please Upload again',
        ]);

        $supCataId = $request->supCataId;
        $supCataName = SuperCatagory::where('id',$supCataId)->first();
        $supName = $supCataName->supcatagoryname;
        //echo $supName;

        $cataImage = $request->file('image');
        $catNam = $request->subcatagoryname;
        $newImageName = $catNam.'-'.$supName.'.'.$cataImage->getClientOriginalExtension();

        // $cataName = $request->catagoryname;
        // $cta = $request->catagorymeta;

        // echo $newImageName,$cataName,$cta;

        $checkCata = SubCatagory::where('subcatagoryname',$catNam)->first();

        if ($checkCata == true) {
            return redirect()->back()->with('suberro','Catagory already available in our system, check now...');
        }else{
            $slug = Str::slug($request->subcatagoryname);
            $supCateSlug = Str::slug($supName);
            $subCataIns = new SubCatagory();
            $subCataIns->slug = $slug;
            $subCataIns->supcataid = $supCataId;
            $subCataIns->supcataname = $supName;
            $subCataIns->supcatanameslug = $supCateSlug;
            $subCataIns->subcatagoryname = $request->subcatagoryname;
            $subCataIns->subcatagorymetatag = $request->catagorymeta;
            $subCataIns->subcataimage = $newImageName;
            $subCataIns->userid = $authId;
            $subCataIns->username = $UserName;
            $subCataIns->created_at = Carbon::now();
            $save = $subCataIns->save();
    
            $uploadLocation = base_path('public/SupUser/uploads/subCatagoryImages/'.$newImageName);
            Image::make($cataImage)->save($uploadLocation);
    
            if ($save) {
                return redirect()->back()->with('subsucc','catagory insert succesfully,');
            }else{
                return redirect()->back()->with('suberro','insert catagory failed, we got some error...');
            }
        }
    }
}
