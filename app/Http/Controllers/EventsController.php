<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use Calender;

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
        $event_list = [];
        foreach ($events as $key => $event) {
          $event_list[] = Calender::event(
            $event->name,
            false,
            new \DateTime($event->start),
            new \DateTime($event->end),
            1,
            [
              'url'=>'/events/'.$event->slug,
              'description'=> $event->description,
            ]
          );
        }
        $calendar_details = Calender::addEvents($event_list);
        $calendar_details->setOptions(
          [
            'contentHeight'=>'auto',
            'height'=> 'parent',
            'businessHours'=> true, // TODO: make an object for this
            'nowIndicator'=> true, //TODO fix this
            'now' => (new \DateTime())->format('Y-m-d\TH:i:s'),
            'eventColor' => '#6610f2',
            'eventTextColor' => '#ffffff',
            'displayEventEnd'=>true,
            'eventRender'=> 'function(event, element) {}',
            'minTime'=>'08:00:00',
            'mamTime'=>'23:00:00',
          ]
        )->setCallbacks([ 'eventRender'=> 'function(event, element) { element.children().last().append(
          \'<div class="eventDiscription col-md-4">\'+event.description+\'</span>\'
        );}']);
        return view('events/index',compact('calendar_details'   ));
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
      $event->description = Events::summernote_tidy($request->description);
      $event->user_id = $request->user_id;
      $event->start = $request->start;
      $event->end = $request->end;
      $event->slug = str_slug($request->name);
      $event->checkSlugIsUnique();
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
      $event->startDate = date('d/m/Y', strtotime($event->start));
      $event->startTime = date('H:i', strtotime($event->start));
      $event->endDate = date('d/m/Y', strtotime($event->end));
      $event->endTime = date('H:i', strtotime($event->end));
      $event->utcStart = date('Y-m-dTH:i', strtotime($event->start));
      $event->utcEnd = date('Y-m-dTH:i', strtotime($event->end));
      $event->mainImage = 'https://hullsangels.com/img/logo.png';
      return view('events.show',compact('event'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
      $event = Events::whereSlug($slug)->firstOrFail();
      return view('events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $this->validate($request, [
        'event_id' => 'required',
        'name' => 'required',
        'description' => 'required',
        'start' => 'required',
        'end' => 'required',
        'user_id' => 'required',
      ]);
      $event = Events::findOrFail($request->event_id);
      $event->name = $request->name;
      $event->description = Events::summernote_tidy($request->description);
      $event->user_id = $request->user_id;
      $event->start = $request->start;
      $event->end = $request->end;
      $event->slug = str_slug($request->slug);
      $event->save();
      return redirect("/events/{$event->slug}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
      $article = Events::whereSlug($slug)->firstOrFail();
      Events::destroy($article->id);
      return redirect("/events");
    }
}
