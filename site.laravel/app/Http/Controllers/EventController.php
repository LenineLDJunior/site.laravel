<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;
use App\Models\User;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Console\Scheduling\Event as SchedulingEvent;
use App\Http\Controllers\ProfileController;

class EventController extends Controller
{
    public function index()
    {
        $search = request('search');

        if ($search) {
            $events =  Event::where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $events =  Event::all();
        }

        return view('welcome', ['events' => $events, 'search' => $search]);
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

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com Sucesso!!!');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        $eventOwner = User::where('id', '=' , $event->user_id)->first()->toArray();
        return view('events.show', ['events' => $event, 'eventOwner' => $eventOwner]);
    }

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg', 'Evento excluido com sucesso!!');
    }

    public function dashboard(){
        $user = auth()->user();
        $events = $user->events;
        return view('/dashboard', ['events' => $events]);
    }

    public function edit($id){
        $event = Event::findOrFail($id);
        return view('events.edit',['event'=>$event]);
    }
    public function update(Request $request){
        Event::findOrFail($request->id)->update($request->all());
        return redirect('/dashboard')->with('msg', 'Evento editado com Sucesso!!!');
    }
}
