<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::all();
        return view('events/index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'name'=> 'required',
        'description'=> 'required',
        'start'=> 'required',
        'end'=> 'required',
        'user_id'=> 'required',
      ]);
      $event = new Events;
      $event->name = $request->name;
      $event->description = $request->description;
      $event->user_id = $request->user_id;
      $event->start = $request->start;
      $event->end = $request->end;
      $event->slug = str_slug($request->name);

      //TODO tidy this up
      $latestSlug = Events::whereRaw("slug RLIKE '^{$event->slug}(-[0-9]*)?$'")
        ->latest('id')
        ->value('slug');
        //dd($latestSlug);
      if($latestSlug){
        $pieces = explode('-',$latestSlug);
        $number = intval(end($pieces));
        $event->slug .= '-' . ($number + 1);
      }
      $event->save();
      return redirect("/events/{$event->slug}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

      $event = Events::whereSlug($slug)->firstOrFail();
      return view('events.show',compact('event'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        //
    }
}
