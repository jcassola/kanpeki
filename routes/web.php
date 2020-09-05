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

Route::view('/', 'home');

Route::view('/about', 'about');

Route::get('/events', 'MainController@returnEvents');

Route::get('/authors', 'MainController@returnAuthors');

Route::get('/store', 'MainController@showStore');

Route::view('/events/new', 'newEvent')
    ->middleware('auth');

Route::post('/events/new', 'MainController@storeEvent')
    ->middleware('auth');

Route::view('/authors/new', 'newAuthor')
    ->middleware('auth');

Route::post('/authors/new', 'MainController@storeAuthor')
    ->middleware('auth');

Route::view('/store/newItem', 'newItem')
    ->middleware('auth');

Route::post('/authors/newItem', 'MainController@storeItem')
    ->middleware('auth');
//Route::get('/login', function () {
//    return view('login');
//});

Auth::routes();


