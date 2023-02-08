<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\About;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.pages.about.view',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'main_image' => 'required|image|mimes:png,jpg,jpeg,jfif,gif|max:2048',File::types(['png','jpg','jpeg','jfif','gif']),
                'side_image' => 'required|image|mimes:png,jpg,jpeg,jfif,gif|max:2048',File::types(['png','jpg','jpeg','jfif','gif']),
                'title' => 'required|string',
                'body' => 'required|string',
                'footer' => 'required|string',
                'phone' => 'required|numeric|min:11'
            ]
            );
            $MainImageName = time().'.'.$request->main_image->extension();
            $SideImageName = time(). rand(0,100) . '.'.$request->side_image->extension();
            $request->main_image->move(public_path('images'), $MainImageName);
            $request->side_image->move(public_path('images'), $SideImageName);
            $abouts = About::create(
                [
                    'main_image' => $MainImageName,
                    'side_image' => $SideImageName,
                    'title' => $request->title,
                    'body' => $request->body,
                    'footer' => $request->footer,
                    'phone' => $request->phone
                ]
                );
                return redirect('about');
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
        $about = About::findorFail($id);
        return view('admin.pages.about.edit',compact('about'));
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
        $about = About::findorFail($id);
        $request->validate(
            [
                'main_image' => 'required|image|mimes:png,jpg,jpeg,jfif,gif|max:2048',File::types(['png','jpg','jpeg','jfif','gif']),
                'side_image' => 'required|image|mimes:png,jpg,jpeg,jfif,gif|max:2048',File::types(['png','jpg','jpeg','jfif','gif']),
                'title' => 'required|string',
                'body' => 'required|string',
                'footer' => 'required|string',
                'phone' => 'required|numeric|min:11'
            ]
            );
            $MainImageName = time().'.'.$request->main_image->extension();
            $SideImageName = time(). rand(0,100) .'.'.$request->side_image->extension();
            $request->main_image->move(public_path('images'), $MainImageName);
            $request->side_image->move(public_path('images'), $SideImageName);
            $about->update(
                [
                    'main_image' => $MainImageName,
                    'side_image' => $SideImageName,
                    'title' => $request->title,
                    'body' => $request->body,
                    'footer' => $request->footer,
                    'phone' => $request->phone
                ]
                );
                return redirect('about');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::findorFail($id);
        $about->delete();
        return redirect('about');
    }
}
