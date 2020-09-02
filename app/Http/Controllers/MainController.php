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
}
