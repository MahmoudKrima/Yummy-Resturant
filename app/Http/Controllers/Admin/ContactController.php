<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $messages = Contact::all();
        return view('admin.pages.contact.view',compact('messages'));
    }

    public function destroy($id){
        $messages=Contact::findorfail($id);
        $messages->delete();
        return back();
    }
}
