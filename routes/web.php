<?php

use Illuminate\Support\Facades\Route;

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



// Route::get('/',function(){
//     return view('welcome');
// });

Route::get('/', 'UserController@index')->name("top-page");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/show', 'UserController@show')->name('my-page');

Route::get('/edit', 'UserController@edit')->name('edit-page');

Route::post('/edit', 'UserController@edit')->name('edit-page');

Route::get('/showList', 'UserController@showList')->name('edit-page');

Route::post('/update', 'UserController@update');

Route::get("/posts", 'PostController@index')->name('post.index');
Route::post("/posts/create", 'PostController@create')->name('post.create');
;
