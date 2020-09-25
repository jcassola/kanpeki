<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function returnAuthors(){
        $authors = Author::paginate(10);
        return view('authors')->with('authors', $authors);
    }

    public function storeAuthor(Request $request){
        $request->validate([
            'nick' => 'required|unique:authors',
            'picture' => 'mimes:jpeg,png,bmp,tiff',
        ], [
            'nick.unique' => 'Ya existe un artista con ese nick',
            'picture.mimes' => 'Solo imágenes son permitidas'
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
    public function showAuthor($id){
        $author = Author::findOrFail($id);
        return view('showAuthor')->with('author', $author);
    }
}
