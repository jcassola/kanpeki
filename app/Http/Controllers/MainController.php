<?php

namespace App\Http\Controllers;


use App\Event;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function returnEvents(){
        $events = Event::orderBy('created_at', 'desc')
            ->get();
        return view('events', $events);
    }
    public function storeEvent(Request $request){
        $event = new Event();
        $event->description = $request->input('description');
        if($request->hasFile('picture')){
            $event->picture = $request->picture->store('public');
        }
        $event->save();
    }
}
