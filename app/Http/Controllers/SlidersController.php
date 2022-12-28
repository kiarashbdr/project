<?php

namespace App\Http\Controllers;

use App\Models\sliders;
use App\models\media;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beeh = sliders::all();
        return view ('admin.sliders.index',compact("beeh"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.sliders.create');
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
            $thesliders = new sliders;
            $file = $request->file('media_id');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/madias/', $filename);
            $path = 'uploads/madias/'.$filename;
            // $request["image_path"]=$path;
            $themedia->photo_path = $path;
            $themedia->save();
            $id = $themedia->id;
            $thesliders->media_id = $id;
            $thesliders->save();
            // $request["media_id"]=$s->id;
            // $a = media::create($request->all());
            // $id=$s->id;
            return redirect()->route("sliders.index",compact("id"));
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function show(sliders $sliders)
    {
        return view('sliders.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function edit(sliders $sliders)
    {
       return view('sliders.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sliders $sliders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function destroy(sliders $sliders)
    {
        //
    }
}
