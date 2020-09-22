<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function returnEvents(){
        $events = Event::orderBy('created_at', 'desc')
            ->paginate(10);
        return view('events')->with('events', $events);
    }
    public function storeEvent(Request $request){
        $request->validate([
            'title' => 'required|unique:events|max:100',
            'description' => 'required',
            'picture' => 'mimes:jpeg,png,bmp,tiff',
        ], [
            'title.unique' => 'Ya existe un evento con ese título',
            'title.max' => 'El título del evento es demasiado largo',
            'picture.mimes' => 'Solo imágenes son permitidas'
        ]);

        $event = new Event();
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        if($request->hasFile('picture')){
            $imageURL = request()->picture->store('public');
            $onlyName = explode('/', $imageURL);
            $event->picture = $onlyName[1];
        }
        $event->save();
        return redirect('/events');
    }

    public function showEvent(Request $request){
        $event = Event::findOrFail($request->input('id'));
        return view('showEvent')->with('event', $event);
    }
}
