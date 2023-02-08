<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Event;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.pages.event.view',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.event.create");
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
            'price' => 'required|numeric',
            'content' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jfif,jpeg,gif|max:2048',File::types(['png','jpg','jpeg','jfif','gif'])
            ]
            );
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $event = Event::create(
            [
                'name' => $request->name,
                'price' => $request->price,
                'content' => $request->content,
                'image' => $imageName
            ]
            );
        return redirect('event');
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
        $event = Event::findorFail($id);
        return view('admin.pages.event.edit',compact('event'));
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
        $event = Event::findorFail($id);
        $validation = $request->validate(
            [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'content' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jfif,jpeg,gif|max:2048',File::types(['png','jpg','jpeg','jfif','gif'])
            ]
            );
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $event->update(
            [
                'name' => $request->name,
                'price' => $request->price,
                'content' => $request->content,
                'image' => $imageName
            ]
            );
        return redirect('event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findorFail($id);
        $event->delete();
        return redirect('event');
    }
}
