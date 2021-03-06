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

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function(){
	return view('client.guest.services');
});

Route::group(['prefix' => 'client'], function(){

	Route::resource('guest','GuestController');
	Route::get('guest/catalog',[

		'uses' => 'GuestController@show',
		'as' => 'guest.catalog']);

	
   
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
