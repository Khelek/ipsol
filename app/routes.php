<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::group(array('prefix' => 'admin', 'namespace' => 'Admin'), function()
{
    Route::resource('blogs', 'BlogsController');
    Route::resource('rubrics', 'RubricsController', ['only' => ['store', 'update', 'destroy']]);
});


Route::get('blogs/{slug}', ['as' => 'blogs.show', 'uses' => 'BlogsController@show'])->where('slug', '[A-Za-z0-9\-]+');
Route::resource('blogs', 'BlogsController', ['except' => ['show']]);

Route::get('security/{slug}', ['as' => 'security.show', 'uses' => 'SecurityController@show'])->where('slug', '[A-Za-z0-9\-]+');
Route::resource('security', 'SecurityController', ['except' => ['show']]);