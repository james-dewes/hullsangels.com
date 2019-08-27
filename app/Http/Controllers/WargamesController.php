<?php

namespace App\Http\Controllers;

use App\Wargames;
use Illuminate\Http\Request;

class WargamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wargames = Wargames::all();
        return view('wargaming.index',compact('wargames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wargaming.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    $this->validate($request, [
        'name'=> 'required',
        'description'=> 'required',
        'user_id'=> 'required',
      ]);
      $system = new Wargames;
      $system->name = $request->name;
      $system->description = Wargames::summernote_tidy($request->description);
      //$system->user_id = $request->user_id;
      $system->slug = str_slug($request->name);

      //TODO tidy this up
      $latestSlug = Wargames::whereRaw("slug RLIKE '^{$system->slug}(-[0-9]*)?$'")
        ->latest('id')
        ->value('slug');
      if($latestSlug){
        $pieces = explode('-',$latestSlug);
        $number = intval(end($pieces));
        $system->slug .= '-' . ($number + 1);
      }
      $system->save();
      return redirect("/wargaming/{$system->slug}");
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Wargames  $wargames
     * @return \Illuminate\Http\Response
     */
     function show($slug){
       $system = Wargames::whereSlug($slug)->firstOrFail();
       return view('wargaming.show',compact('system'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wargames  $wargames
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $system = Wargames::whereSlug($slug)->firstOrFail();
        return view('wargames.edit',compact('system'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wargames  $wargames
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wargames $wargames)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wargames  $wargames
     * @return \Illuminate\Http\Response
     */
    function destroy($slug)
    {
      $system = Wargames::whereSlug($slug)->firstOrFail();
      Wargames::destroy($article->id);
      return redirect("/news");
    }
}
