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
Route::get('/pocetna', 'PagesController@pocetna');
Route::get('/cene', 'PagesController@cene');
Route::resource('/posts', 'PostsController');
Route::get('/onama', 'PagesController@onama');
Route::get('/kontakt', 'PagesController@kontakt');
//Route::resource('posts', 'PostsController'); 