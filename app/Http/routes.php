<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('union', function () {
	return view('frontend.union');
});
	
Route::get('service', function () {
	return view('frontend.service');
});

Route::get('message', function () {
	return view('frontend.message');
});

Route::get('aboutus', function () {
	return view('frontend.aboutus');
});

Route::auth();

// Route::get('/home', 'HomeController@index');
