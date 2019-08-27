<?php

namespace App\Http\Controllers;

use App\Roleplay;
use Illuminate\Http\Request;

class RoleplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('roleplay.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roleplay.create');
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
     * @param  String $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $system = Roleplay::whereSlug($slug)->firstOrFail();
        return view('roleplay.show',compact($system));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  String $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $system = Roleplay::whereSlug($slug)->firstOrFail();
        return view('roleplay.edit',compact('system'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roleplay  $roleplay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roleplay $roleplay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roleplay  $roleplay
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $system = Roleplay::whereSlug($slug)->firstOrFail();
        Roleplay::destroy($system->id);
    }
}
