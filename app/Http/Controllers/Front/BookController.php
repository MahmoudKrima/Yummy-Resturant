<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request){
        $request->validate([
            "name"=>'required|string',
            "email"=>'required|email',
            "phone"=>'required|numeric',
            "date"=>'required|date',
            "time"=>'required|date_format:H:i',
            "people"=>'required|numeric|min:1',
            "message"=>'required|string'
        ]);
        $book=Book::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "date"=>$request->date,
            "time"=>$request->time,
            "people"=>$request->people,
            "message"=>$request->message
        ]);
        return back()->with('success',"table Booked Successfuly");
    }
}
