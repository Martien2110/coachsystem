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

/*
* Front-end
*/
Route::get('/', function () {
    return view('front-end.index');
});

Route::get('/home', function () {
    return view('front-end.index');
});

Route::get('/overmij', function () {
    return view('front-end.overmij');
});
Route::get('/veranderjeleven', function () {
    return view('front-end.veranderjeleven');
});

/*
*	Back-end
*/

Route::auth();

Route::get('/index', 'homeController@index');
Route::resource('/dashboard','DashboardController');

Route::get('/login', function(){
	return view('back-end.login');
});

Route::get('/blabla', function(){
	return view('auth.login');
});

Route::resource('message', 'MessageController');
Route::resource('customer', 'CustomerController');

