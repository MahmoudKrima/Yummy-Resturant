<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Review;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return view('admin.pages.review.view',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.review.create");
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
            'name' => 'required|string',
            'position' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jfif,jpeg,gif|max:2048',File::types(['png','jpg','jpeg','jfif','gif'])
            ]
            );
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $review = Review::create(
            [
                'name' => $request->name,
                'position' => $request->position,
                'content' => $request->content,
                'image' => $imageName
            ]
            );
        return redirect('review');
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
        $review = Review::findorFail($id);
        return view('admin.pages.review.edit',compact('review'));
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
        $review = Review::findorFail($id);
        $validation = $request->validate(
            [
            'name' => 'required|string',
            'position' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jfif,jpeg,gif|max:2048',File::types(['png','jpg','jpeg','jfif','gif'])
            ]
            );
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $review->update(
            [
                'name' => $request->name,
                'position' => $request->position,
                'content' => $request->content,
                'image' => $imageName
            ]
            );
        return redirect('review');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::findorFail($id);
        $review->delete();
        return redirect('review');
    }
}
