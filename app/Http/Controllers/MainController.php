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
        return view('events')->with('events', $events);
    }
    public function returnAuthors(){
        $authors = Author::paginate(10);
        return view('authors')->with('authors', $authors);
    }
    public function showStore(){
        $items = Item::paginate(10);
        return view('store')->with('items', $items);
    }
    public function storeAuthor(Request $request){
        $request->validate([
            'nick' => 'required|unique:authors',
        ], [
            'nick.unique' => 'Ya existe un artista con ese nick',
        ]);

        $author = new Author();
        $author->name = $request->input('name');
        $author->nick = $request->input('nick');
        $author->description = $request->input('description');
        $author->category = $request->input('category');
        if($request->hasFile('picture')){
            $imageURL = request()->picture->store('public');
            $onlyName = explode('/', $imageURL);
            $author->picture = $onlyName[1];
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
            $imageURL = request()->picture->store('public');
            $onlyName = explode('/', $imageURL);
            $event->picture = $onlyName[1];
        }
        $event->save();
        return redirect('/events');
    }
    public function storeItem(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required|max:300',
            'price' => 'required'
        ], [
            'description.max' => 'La descripción del artículo es demasiado larga'
        ]);

        $item = new Item();
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        if($request->hasFile('picture')){
            $imageURL = request()->picture->store('public');
            $onlyName = explode('/', $imageURL);
            $item->picture = $onlyName[1];
        }
        $item->save();
        return redirect('/store');
    }
}
