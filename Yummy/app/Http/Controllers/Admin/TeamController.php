<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Team;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('admin.pages.team.view',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.team.create");
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
            'description' => 'required|string',
            'twitter' => 'string|url',
            'facebook' => 'string|url',
            'instgrame' => 'string|url',
            'linkedin' => 'string|url',
            'image' => 'required|image|mimes:png,jpg,jfif,jpeg,gif|max:2048',File::types(['png','jpg','jpeg','jfif','gif'])
            ]
            );
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $team = Team::create(
            [
                'name' => $request->name,
                'position' => $request->position,
                'description' => $request->description,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'instgrame' => $request->instgram,
                'linkedin' => $request->linkedin,
                'image' => $imageName
            ]
            );
        return redirect('team');
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
        $team = Team::findorFail($id);
        return view('admin.pages.team.edit',compact('team'));
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
        $team = Team::findorFail($id);
        $validation = $request->validate(
            [
                'name' => 'required|string',
                'position' => 'required|string',
                'description' => 'required|string',
                'twitter' => 'string',
                'facebook' => 'string',
                'instgrame' => 'string',
                'linkedin' => 'string',
                'image' => 'required|image|mimes:png,jpg,jfif,jpeg,gif|max:2048',File::types(['png','jpg','jpeg','jfif','gif'])
            ]
        );
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $team->update(
            [
                'name' => $request->name,
                'position' => $request->position,
                'description' => $request->description,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'instgrame' => $request->instgram,
                'linkedin' => $request->linkedin,
                'image' => $imageName
            ]
            );
        return redirect('team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findorFail($id);
        $team->delete();
        return redirect('team');
    }
}
