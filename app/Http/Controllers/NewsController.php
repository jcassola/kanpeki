<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function returnNews(){
        $news = News::orderBy('created_at', 'desc')
            ->paginate(10);
        return view('news')->with('news', $news);
    }
    public function storeNews(Request $request){
        $request->validate([
            'title' => 'required',
            'text' => 'required|max:800',
            'picture' => 'mimes:jpeg,png,bmp,tiff',

        ], [
            'description.max' => 'La noticia es demasiado larga',
            'picture.mimes' => 'Solo imágenes son permitidas'
        ]);
        $news = new News();
        $news->title = $request->input('title');
        $news->text = $request->input('text');
        if($request->hasFile('picture')){
            $imageURL = request()->picture->store('public');
            $onlyName = explode('/', $imageURL);
            $news->picture = $onlyName[1];
        }
        $news->save();
        return redirect('/news');
    }
    public function showNews($id){
        $news = News::findOrFail($id);
        return view('showNews')->with('news', $news);
    }
}
