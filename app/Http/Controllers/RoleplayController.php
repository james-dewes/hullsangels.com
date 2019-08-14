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
     * @param  \App\Roleplay  $roleplay
     * @return \Illuminate\Http\Response
     */
    public function show(Roleplay $roleplay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roleplay  $roleplay
     * @return \Illuminate\Http\Response
     */
    public function edit(Roleplay $roleplay)
    {
        //
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
    public function destroy(Roleplay $roleplay)
    {
        //
    }
}
