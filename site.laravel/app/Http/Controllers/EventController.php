<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;

class EventController extends Controller
{
    public function index()
    {
        $events =  Event::all();
        return view('welcome', ['events' => $events]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new event;
        $event->title = $request->title;
        $event->city = $request->city;
        $event->description = $request->description;
        $event->attractions = $request->attractions;
        $event->date = $request->date;
        $event->private = $request->private;

        $event->save();

        return redirect('/');
    }
}
