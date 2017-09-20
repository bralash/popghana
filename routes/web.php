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
	// Route::get('', ['uses' => 'ClientController@index']);
	Route::get('api/users', ['uses' => 'AdminController@usersJSON']);
	Route::get('user/{code}', ['uses' => 'AdminController@getUserById']);

	// Emails
	Route::post('send', ['uses' => 'EmailController@comingSoon']);
	Route::post('/contact-form', ['uses' => 'EmailController@contact']);
	Route::get('/email-confirm', ['uses' => 'EmailController@confirm']);

	// Register and Login
	Route::get('signup', ['uses' => 'ClientController@signup']);
	Route::get('signup/{id}', ['uses' => 'ClientController@refSignup']);
	Route::post('signup', ['uses' => 'ClientController@register']);
	Route::get('signin', ['uses' => 'ClientController@signin']);
	Route::post('login', ['uses' => 'ClientController@login']);
	Route::get('logout', ['uses' => 'ClientController@logout']);

	Route::group(['middleware' => ['auth']], function() {
		Route::get('profile', ['uses' => 'ClientController@profile']);
		Route::post('change-password', ['uses' => 'ClientController@changePassword']);
		Route::post('update-profile', ['uses' => 'ClientController@updateProfile']);

		Route::post('update-upliner', ['uses' => 'AdminController@updateupliner']);
		
		Route::group(['prefix' => 'admin'], function() {
			Route::get('/', ['uses' => 'AdminController@dashboard']);
			Route::get('users', ['uses' => 'AdminController@users']);
			Route::get('validate-user', ['uses' => 'AdminController@validateUser']);
			Route::post('user-validate', ['uses' => 'AdminController@userValidate']);
		});
	});
	Route::get('', ['uses' => 'ClientController@home']);
	Route::get('/contact', ['uses' => 'ClientController@contact']);


});
