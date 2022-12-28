<?php

namespace App\Http\Controllers;
use App\Models\navs;
use App\models\media;
use Illuminate\Http\Request;

class NavsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bwn = navs::all();
        return view('admin.navs.index',compact("bwn"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.navs.create');
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
        $thenavs = new navs;
        $file = $request->file('media_id');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename = time() . '.' . $extension;
        $file->move('uploads/madias/', $filename);
        $path = 'uploads/madias/'.$filename;
        // $request["image_path"]=$path;
        // $themedia->photo_path = $path;
        $themedia->save();
        $id = $themedia->id;
        // $thenavs->media_id = $id;
        $thenavs->save();
        // $request["media_id"]=$s->id;
        // $a = media::create($request->all());
        // $id=$s->id;
        return redirect()->route("navs.index",compact("id"));
    }

    public function randomNum(){
        $first = rand(1,100);
        $sec = rand(100,1000);
        $final = rand($first,$sec);
        $alafabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        $alfrand = rand(0,27);

        $alf = $alafabet[$alfrand];
        $alfrand = rand(0,27);
        $alf = strval($alf).$alafabet[$alfrand];
        $alfrand = rand(0,27);
        $alf = strval($alf).strval($alafabet[$alfrand]);
        return strval($final) . "-". strval(time());
        // return redirect()->route("navs.index",compact("id"));
        return redirect()->route("navs.index",compact("id"));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\navs  $navs
     * @return \Illuminate\Http\Response
     */
    public function show(navs $navs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\navs  $navs
     * @return \Illuminate\Http\Response
     */
    public function edit(navs $navs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\navs  $navs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, navs $navs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\navs  $navs
     * @return \Illuminate\Http\Response
     */
    public function destroy(navs $navs)
    {
        //
    }
}
