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

Route::group(['middleware' => ['web']], function () {
	
	Route::get('/', function () {
    	return view('pages.welcome');
	})->name('welcome');

	Route::post('/signup', [
		'uses' => 'UserController@signUp',
		'as' => 'signup'
	]);

	Route::post('signin', [
		'uses' => 'UserController@signIn',
		'as' => 'signin'
	]);

	Route::get('/postRide', [
		'uses' => 'UserController@postRides',
		'as' => 'postRide',
		'middleware' => 'auth'
	]);

	Route::post('/post', [
		'uses' => 'PostController@post',
		'as' => 'post.create'
	]);

	Route::get('/findRide', [
		'uses' => 'PostController@findRide',
		'as' => 'findRide',
		'middleware' => 'auth'
	]);

	Route::get('/logout', [
		'uses' => 'UserController@logout',
		'as' => 'logout'
	]);

	Route::get('/account', [
		'uses' => 'UserController@getAccount',
		'as' => 'account'
	]);

	Route::post('/updateaccount', [
		'uses' => 'UserController@postSaveAccount',
		'as' => 'account.save'
	]);

	Route::get('/userimage/{filename}', [
		'uses' => 'UserController@getUserImage',
		'as' => 'account.image'
	]);

});