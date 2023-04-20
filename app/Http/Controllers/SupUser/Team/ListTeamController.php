<?php

namespace App\Http\Controllers\SupUser\Team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\usersteam;
use App\Models\TeamName;

class ListTeamController extends Controller
{
    public function index(){
        $listTeam = TeamName::all();
        return view('SupUserDash.Team.index',compact('listTeam'));
    }
}
