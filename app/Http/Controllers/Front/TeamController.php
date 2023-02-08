<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $teams=Team::all();
        return view('front.pages.team',compact('teams'));
    }

}
