<?php

namespace App\Http\Controllers;


use App\Event;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function returnEvents(){
        $events = Event::orderBy('created_at', 'desc')
            ->paginate(10);
        return view('events', $events);
    }
    public function storeEvent(Request $request){
        $request->validate([
            'title' => 'required|unique:events|max:100',
            'description' => 'required',
        ]);

        $event = new Event();
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        if($request->hasFile('picture')){
            $event->picture = $request->picture->store('public');
        }
        $event->save();
        return redirect('/events');
    }
}
