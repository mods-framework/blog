<?php

/*
|--------------------------------------------------------------------------
| Blog Backend Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Mods the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('all', 'BlogController@showAll')->name('all');
Route::get('add', 'BlogController@showAddForm')->name('add');
Route::post('add', 'BlogController@createBlog')->name('add');