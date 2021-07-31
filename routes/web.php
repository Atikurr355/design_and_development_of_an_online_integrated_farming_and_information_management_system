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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/categories','AdminController@categories')->name('categories');


Route::get('/app', 'PagesController@app');
Route::get('/', 'PagesController@index')->name('index');
Route::get('/fulldescription','PagesController@fulldescription')->name('description');
Route::get('/buy','PagesController@buy')->name('buy');
Route::resource('product','ProductController');
Route::resource('shortpost','ShortpostController');
Route::resource('post','PostController');

Route::get('/hachariplan','HachariController@hachariplan')->name('hachariplan');
Route::get('/incubator1','HachariController@incubator1')->name('incubator1');
Route::get('/incubator2','HachariController@incubator2')->name('incubator2');
Route::get('/incubator3','HachariController@incubator3')->name('incubator3');

//animal/////////////////////////////////////////////////////
Route::get('/goru','HachariController@goru')->name('goru');
Route::get('/goat','HachariController@goat')->name('goat');

//payment/////////////////////////////////////////////////////
Route::get('paymentinfo','PagesController@paymentinfo')->name('paymentinfo');
Route::get('question','PagesController@question')->name('question');


//grash///////////////////////////////////////////////////////////////////
Route::get('grash','PagesController@grash')->name('grash');