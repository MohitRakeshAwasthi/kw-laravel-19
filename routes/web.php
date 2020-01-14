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


# Auth::routes();
Route::get('/', function () { return view('frontend.home.index'); });

Route::group(['namespace' => 'Front'], function () {

	Route::resource('signup', 'SignUpController');
	Route::resource('signin', 'SignInController');
	Route::resource('{main}/{slug}', 'StaticPages');

	Route::get('logout', 'SignInController@logout');



});
