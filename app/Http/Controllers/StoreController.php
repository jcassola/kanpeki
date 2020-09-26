<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function showStore(){
        $items = Item::paginate(10);
        return view('store')->with('items', $items);
    }
    public function storeItem(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required|max:300',
            'price' => 'required',
            'picture' => 'required|mimes:jpeg,png,bmp,tiff',

        ], [
            'description.max' => 'La descripción del artículo es demasiado larga',
            'picture.mimes' => 'Solo imágenes son permitidas'
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
    public function showItem($id){
        $item = Item::findOrFail($id);
        return view('showItem')->with('item', $item);
    }
}
