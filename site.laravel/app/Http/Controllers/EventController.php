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
        $event->itens = $request->itens;

        /* Requisição da imagem */

        if ($request->hasFile('image') && $request->file('image')) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $request->image->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com Sucesso!!!');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', ['events' => $event]);
    }
}
