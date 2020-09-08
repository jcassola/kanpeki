<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/events', 'MainController@returnEvents')->name('events');

Route::get('/authors', 'MainController@returnAuthors')->name('authors');

Route::get('/store', 'MainController@showStore')->name('store');

Route::view('/events/new', 'newEvent')
    ->middleware('auth')->name('new_event');

Route::post('/events/new', 'MainController@storeEvent')
    ->middleware('auth');

Route::view('/authors/new', 'newAuthor')
    ->middleware('auth')->name('new_author');

Route::post('/authors/new', 'MainController@storeAuthor')
    ->middleware('auth');

Route::view('/store/newItem', 'newItem')
    ->middleware('auth')->name('new_item');

Route::post('/authors/newItem', 'MainController@storeItem')
    ->middleware('auth');
//Route::get('/login', function () {
//    return view('login');
//});

Auth::routes();


