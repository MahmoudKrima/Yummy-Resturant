<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\admin\About;
use App\Models\admin\Section;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $abouts=About::all();
        $sections=Section::all();
        return view('front.pages.about',compact('abouts','sections'));
    }
}
