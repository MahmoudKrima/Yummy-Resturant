<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Gallery;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.pages.gallery.view',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'image' => 'required|image|mimes:png,jpg,jfif,jpeg,gif',File::types(['png','jpg','jpeg','jfif','gif'])
            ]
            );
        $imageName = time(). rand(0,15000) . '.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        Gallery::create(
            [
                'image' => $imageName
            ]
            );
        return redirect('gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findorFail($id);
        return view('admin.pages.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findorFail($id);

        $validation = $request->validate(
            [
            'image' => 'required|image|mimes:png,jpg,jfif,jpeg,gif|max:2048',File::types(['png','jpg','jpeg','jfif','gif'])
            ]
            );
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $gallery->update(
            [
                'image' => $imageName
            ]
            );
        return redirect('gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findorFail($id);
        $gallery->delete();
        return redirect('gallery');
    }
}
