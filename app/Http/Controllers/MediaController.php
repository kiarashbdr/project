<?php

namespace App\Http\Controllers;

use App\Models\media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ben = media::all();
        return view('admin.media.index',compact("ben"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ben = media::all();
        return view('admin.media.create',compact("ben"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $file = $request->file('ImgP');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =$this->randomNum() .'.'.$extension;
        $file->move('uploads/madias/', $filename);
        $finaldes = 'uploads/madias/'.$filename;     
        
        $request['photo_path']=$finaldes;
        // dd($request['image_path']);
        media::create($request->all());
        return redirect(route("media.index"));
    }

    public function randomNum(){
        $first = rand(1,100);
        $sec = rand(100,1000);
        $final = rand($first,$sec);
        $alafabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        $alfrand = rand(0,27);

        $alf = $alafabet[$alfrand];
        $alfrand = rand(0,27);
        // $alf = strval($alf).$alafabet[$alfrand];
        $alfrand = rand(0,27);
        $alf = strval($alf).strval($alafabet[$alfrand]);
        return strval($final) . "-". strval(time());
        return redirect()->route("media.index",compact("id"));
    }
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(media $media)
    {
        //
    }
}
