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
//Auth::routes();

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/events', 'MainController@returnEvents')->name('events');

Route::get('/authors', 'MainController@returnAuthors')->name('authors');

Route::get('/store', 'MainController@showStore')->name('store');

Route::middleware('auth')->group(function() {
    Route::view('/events/new', 'newEvent')->name('new_event');
    Route::post('/events/new', 'MainController@storeEvent');
    Route::view('/authors/new', 'newAuthor')->name('new_author');
    Route::post('/authors/new', 'MainController@storeAuthor');
    Route::view('/store/new', 'newItem')->name('new_item');
    Route::post('/store/new', 'MainController@storeItem');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');


//Route::get('/login', function () {
//    return view('login');
//});





