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

<<<<<<< HEAD
        //Requisição da imagem
        if ($request->hasFile('image') && $request->file('image')) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $request->image->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
=======
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() .strtotime("now")) . "." . $extension;
            $request->image->move(public_path('img/events'), $imageName);
            $event->image = $imageName;

>>>>>>> 7f6010580eef8668e153789d708914076f6ffae0
        }

        $event->save();

<<<<<<< HEAD
        return redirect('/')->with('msg', 'Evento criado com Sucesso!!!');
=======
        return redirect('/')->with("msg","Seu evento foi criado com sucesso!");
>>>>>>> 7f6010580eef8668e153789d708914076f6ffae0
    }
}
