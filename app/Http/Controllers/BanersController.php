<?php

namespace App\Http\Controllers;

use App\Models\baners;
use App\models\media;
use Illuminate\Http\Request;

class BanersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ban = baners::all();
        return view('admin.banners.index',compact("ban"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // baners::create($request->all());
        // $file= $request->file('topAdBanner');
        // $extension = $file ->getClientOriginalExtension();
        // $filename = time() .'.'. $extension;
        // $file->move('uploads/medias',$filename);
        // $path='uplodes/media/'.$filename;
        // $request["image_path"]=$path;
        // $s = media::create($request->all());
        // $request["media_id"] =$s->id;
        // $a = baners::create($request->all());
        // $id=$a->id;
        // return redirect()->route("baners.index", compact("id")); 
            $themedia = new media;
            $thebanner = new baners;
            $file = $request->file('media_id');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/madias/', $filename);
            $path = 'uploads/madias/'.$filename;
            // $request["image_path"]=$path;
            $themedia->photo_path = $path;
            $themedia->save();
            $id = $themedia->id;
            $thebanner->media_id = $id;
            $thebanner->save();
            // $request["media_id"]=$s->id;
            // $a = media::create($request->all());
            // $id=$s->id;
            return redirect()->route("baners.index",compact("id"));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\baners  $baners
     * @return \Illuminate\Http\Response
     */
    public function show(baners $baners)
    {
        return view('baners.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\baners  $baners
     * @return \Illuminate\Http\Response
     */
    public function edit(baners $baners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\baners  $baners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, baners $baners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\baners  $baners
     * @return \Illuminate\Http\Response
     */
    public function destroy(baners $baners)
    {
        //
    }
}
