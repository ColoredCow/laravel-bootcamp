<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventGuest;
use App\Guest;
use Illuminate\Http\Request;

class EventController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest('date')->get();

        return view('events.index')->with('events', $events);
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
            'name' => 'required|string',
            'theme' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string|min:100',
            'date' => 'required|date|after:today'
        ]);

        $event = Event::create($request->except('_token'));

        return redirect('/events/' . $event->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {

        return view('events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

    public function inviteGuest($event, $guest)
    {
        if ($guest == 'all') {
            $guests = Guest::eventInvitationList($event);
            foreach ($guests as $guest) {
                EventGuest::create(['event_id' => $event, 'guest_id' => $guest->id]);
            }
        } else {
            EventGuest::create(['event_id' => $event, 'guest_id' => $guest]);
        }
        

        return redirect('/events/' . $event);
    }
}
