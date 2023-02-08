<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Section;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::all();
        return view('admin.pages.section.view', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.section.create');
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
                'icon_image' => 'required|image|mimes:png,jpg,jfif,jpeg,gif,ico|max:2048', File::types(['png', 'jpg', 'jpeg', 'jfif', 'gif']),
                'title' => 'required|string',
                'body' => 'required|string',
            ]
        );
        $imageName = time() . rand(0, 1000) . '.' . $request->icon_image->extension();
        $request->icon_image->move(public_path('images'), $imageName);
        $sections = Section::create(
            [
                'icon_image' => $imageName,
                'title' => $request->title,
                'body' => $request->body,
            ]
        );
        return redirect('section');
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
        $section = Section::findorFail($id);
        return view('admin.pages.section.edit', compact('section'));
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
        $section = Section::findorFail($id);
        $validation = $request->validate(
            [
                'icon_image' => 'required|image|mimes:png,jpg,jfif,jpeg,gif,ico|max:2048', File::types(['png', 'jpg', 'jpeg', 'jfif', 'gif']),
                'title' => 'required|string',
                'body' => 'required|string',
            ]
        );
        $imageName = time() . rand(0, 1000) . '.' . $request->icon_image->extension();
        $request->icon_image->move(public_path('images'), $imageName);
        $section->update(
            [
                'icon_image' => $imageName,
                'title' => $request->title,
                'body' => $request->body,
            ]
        );
        return redirect('section');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::findorFail($id);
        $section->delete();
        return redirect('section');
    }
}
