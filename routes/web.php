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

Route::resource('/wod', 'WodController');

Route::resource('/profile', 'ProfileController');

Route::resource('/search', 'SearchController');

Route::resource('/benchmark', 'BenchmarkController');

//Route::resource('/progress', 'ProgressController');

Route::get('/contact', 'ContactController@index');

Route::get('/progress', 'TrackProgressController@index');

Route::post('/progress/user/{user}', 'TrackProgressController@show');
