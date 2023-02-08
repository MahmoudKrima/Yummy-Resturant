<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\admin\About;
use App\Models\admin\Category;
use App\Models\admin\Event;
use App\Models\admin\Gallery;
use App\Models\admin\Product;
use App\Models\admin\Review;
use App\Models\admin\Section;
use App\Models\Admin\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $abouts = About::all();
        $sections = Section::all();
        $products = Product::all();
        $categories = Category::all();
        $reviews = Review::all();
        $events = Event::all();
        $teams = Team::all();
        $galleries = Gallery::all();
        return view("front.pages.index",compact('abouts','sections','categories','products','reviews','events','teams','galleries'));
    }
}
