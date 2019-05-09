<?php


Route::get('/', function () {
	return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * chat route
 */

Route::post('/getFriends', 'HomeController@getFriends')->name('getFriends');
Route::post('/session/create', 'SessionController@create');