<?php

namespace App\Http\Controllers;

use App\Author;
use App\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::take(3)->get();
        $authors = Author::take(3)->get();

        return view('home')
            ->with(['items' => $items, 'authors' => $authors]);
    }
}
