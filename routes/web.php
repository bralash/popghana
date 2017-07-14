<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' =>['web']], function() {
	Route::get('', ['uses' => 'ClientController@index']);

	// Emails
	Route::post('send', ['uses' => 'EmailController@comingSoon']);
	Route::post('/contact-form', ['uses' => 'EmailController@contact']);
	Route::get('/email-confirm', ['uses' => 'EmailController@confirm']);


	Route::get('/home', ['uses' => 'ClientController@home']);
	Route::get('/contact', ['uses' => 'ClientController@contact']);
	Route::get('signup', ['uses' => 'ClientController@signup']);
});
