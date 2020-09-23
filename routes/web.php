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

//Main routes
Route::view('/home', 'home')->name('home');
Route::redirect('/', 'home');
Route::view('/about', 'about')->name('about');
Route::get('/events', 'EventsController@returnEvents')->name('events');
Route::get('/news', 'NewsController@returnNews')->name('news');
Route::get('/authors', 'AuthorsController@returnAuthors')->name('authors');
Route::get('/store', 'StoreController@showStore')->name('store');

//Auth routes
Route::middleware('auth')->group(function() {
    Route::view('/events/new', 'newEvent')->name('new_event');
    Route::post('/events/new', 'EventsController@storeEvent');
    Route::view('/authors/new', 'newAuthor')->name('new_author');
    Route::post('/authors/new', 'AuthorsController@storeAuthor');
    Route::view('/store/new', 'newItem')->name('new_item');
    Route::post('/store/new', 'StoreController@storeItem');
    Route::view('/news/new', 'newNews')->name('new_news');
    Route::post('/news/new', 'NewsController@storeNews');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});

//Details routes
Route::get('authors/{id}', 'AuthorsController@showAuthor')->name('author.show');
Route::get('events/{id}', 'EventsController@showEvent')->name('event.show');
Route::get('store/{id}', 'StoreController@showItem')->name('item.show');
Route::get('news/{id}', 'NewsController@showNews')->name('news.show');

//Login routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');







