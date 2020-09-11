<?php

namespace App\Http\Controllers;


use App\Author;
use App\Event;
use App\Item;
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
    public function showStore(){
        $items = Item::paginate(10);
        return view('store', $items);
    }
    public function storeAuthor(Request $request){
        $request->validate([
            'nick' => 'required|unique:authors',
        ], [
            'nick.unique' => 'Ya existe un autor con ese nick.',
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
        ], [
            'title.unique' => 'Ya existe un evento con ese título',
            'title.max' => 'El título del evento es demasiado largo'
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
    public function storeItem(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required|max:300',
            'price' => 'required'
        ], [
            'description.max' => 'La descripción del artículo es demasiado larga'
        ]);

        $item = new Item();
        $item->title = $request->input('title');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        if($request->hasFile('picture')){
            $item->picture = $request->picture->store('public');
        }
        $item->save();
        return redirect('/store');
    }
}
