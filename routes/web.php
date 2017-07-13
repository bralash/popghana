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
	Route::post('send', ['uses' => 'ClientController@sendMail']);

	Route::get('send', function(){
		Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
		{
			$message->to('info@popmoneymatrix.com');
		});
	});
});
