<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $categories=Category::all();
        $products=Product::all();
        return view('front.pages.menu',compact('categories','products'));
    }

}
