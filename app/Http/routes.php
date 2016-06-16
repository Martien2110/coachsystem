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
*
* Front-end
*
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
*
*	Back-end
*
*/

Route::get('/dashboard/message','DashboardController@messages');
// Route::get('/dash','');

Route::get('/customer/{id}/deleteuser', 'CustomerController@deleteuser');
Route::resource('user', 'UserController');

Route::resource('message', 'MessageController');
Route::resource('customer', 'CustomerController');

Route::get('/login', function(){
	return view('back-end.login');
});

Route::auth();

Route::get('/index', 'HomeController@index');

Route::get('/login', function(){
	return view('back-end.login');
});
