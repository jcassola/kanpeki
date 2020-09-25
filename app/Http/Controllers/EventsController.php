<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function returnEvents(){
        $events = Event::orderBy('created_at', 'desc')
            ->where('when', '>', now()->subDay())
            ->paginate(10);
        return view('events')->with('events', $events);
    }
    public function storeEvent(Request $request){
        $request->validate([
            'title' => 'required|unique:events|max:100',
            'description' => 'required',
            'picture' => 'mimes:jpeg,png,bmp,tiff',
            'when' => 'required'
        ], [
            'title.unique' => 'Ya existe un evento con ese título',
            'title.max' => 'El título del evento es demasiado largo',
            'picture.mimes' => 'Solo imágenes son permitidas',
            'when.required' => 'Es necesario la fecha del evento',
        ]);
        $event = new Event();
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->when = $request->input('when');
        if($request->hasFile('picture')){
            $imageURL = request()->picture->store('public');
            $onlyName = explode('/', $imageURL);
            $event->picture = $onlyName[1];
        }
        $event->save();
        return redirect('/events');
    }

    public function showEvent($id){
        $event = Event::findOrFail($id);
        return view('showEvent')->with('event', $event);
    }
}
