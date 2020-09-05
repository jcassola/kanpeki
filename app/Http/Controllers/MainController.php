<?php

namespace App\Http\Controllers;


use App\Author;
use App\Event;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function returnEvents(){
        $events = Event::orderBy('created_at', 'desc')
            ->paginate(10);
        return view('events', $events);
    }
    public function returnAuthors(){
        $authors = Author::paginate(10);
        return view('authors', $authors);
    }
    public function storeAuthor(Request $request){
        $request->validate([
            'nick' => 'required|unique:authors',
        ]);

        $author = new Author();
        $author->name = $request->input('name');
        $author->nick = $request->input('nick');
        $author->description = $request->input('description');
        $author->category = $request->input('category');
        if($request->hasFile('picture')){
            $author->picture = $request->picture->store('public');
        }
        $author->save();
        return redirect('/authors');
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
