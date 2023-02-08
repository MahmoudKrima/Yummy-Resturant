<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\admin\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('front.pages.contact');
    }
    public function store(Request $request){
        $request->validate([
            "name"=>'required|string',
            "email"=>'required|string|email',
            "subject"=>'required|string',
            "message"=>'required|string'
        ]);
        $contact = Contact::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'subject' =>$request->subject,
            'message' =>$request->message,
        ]);
        return back()->with('success','Message sent successfuly');
    }
}
