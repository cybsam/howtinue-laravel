<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    //superuser chat
    public function supUserChat(){
        $userShowAll = User::where('email_verified',1)->where('block',0)->inRandomOrder()->get();
        return view('SupUserDash.chat.index',[
            'userShowAll'=>$userShowAll
        ]);
    }

    //chat show
    public function supUserChatShow($user_id){
        $fromUserId = $user_id;
        $myId = Auth::id();
        $fetchData = Chat::where('from_user_id',$fromUserId)->where('to_user_id',$myId)->get();
        return view('SupUserDash.chat.replay',[
            'fetchData'=>$fetchData
        ]);
    }
}
