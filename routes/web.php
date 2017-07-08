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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@create');

Route::resource('/addwod', 'WodController');

Route::resource('/createprofile', 'ProfileController');

Route::post('addwod/{user}', 'WodController@store');

Route::post('/createprofile/{user}','ProfileController@store');

Route::get('addwod/{addwod}', 'WodController@show');
