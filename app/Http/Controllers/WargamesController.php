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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wargames  $wargames
     * @return \Illuminate\Http\Response
     */
     function show($slug){
       // return view('news.show',compact(News::whereSlug($slug)->firstOrFail()));
       $system = Wargames::whereSlug($slug)->firstOrFail();
       return view('wargaming.show',compact('system','archive'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wargames  $wargames
     * @return \Illuminate\Http\Response
     */
    public function edit(Wargames $wargames)
    {
        //
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
    public function destroy(Wargames $wargames)
    {
        //
    }
}
