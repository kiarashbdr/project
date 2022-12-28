<?php

namespace App\Http\Controllers;

use App\Models\vff;
use App\Models\media;
use Illuminate\Http\Request;

class VffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booon = vff::all();
        return view('admin.vff.index',compact("booon")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vff.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $themedia = new media;
        $thevff = new vff;
        $file = $request->file('media_id');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename = time() . '.' . $extension;
        $file->move('uploads/madias/', $filename);
        $path = 'uploads/madias/'.$filename;
        // $request["image_path"]=$path;
        $themedia->photo_path = $path;
        $themedia->save();
        $id = $themedia->id;
        $thevff->media_id = $id;
        $thevff->save();
        // $request["media_id"]=$s->id;
        // $a = media::create($request->all());
        // $id=$s->id;
        return redirect()->route("vff.index",compact("id"));
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vff  $vff
     * @return \Illuminate\Http\Response
     */
    public function show(vff $vff)
    {
        return view('admin.vff.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vff  $vff
     * @return \Illuminate\Http\Response
     */
    public function edit(vff $vff)
    {
        // return view('vff.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vff  $vff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vff $vff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vff  $vff
     * @return \Illuminate\Http\Response
     */
    public function destroy(vff $vff)
    {
        //
    }
}
