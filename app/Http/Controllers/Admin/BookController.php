<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $tables=Book::all();
        return view('admin.pages.table.view',compact('tables'));
    }
    public function destroy($id){
        $tables=Book::findorfail($id);
        $tables->delete();
        return back();
    }
}
