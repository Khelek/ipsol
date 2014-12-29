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

Route::filter('basic.once', function()
{
    return Auth::onceBasic();
});

Route::get('/', 'WelcomeController@index');


Route::get('/admin', function()
{
    return Redirect::route('admin.blogs.index');
});

Route::get('/support', function()
{
    return Redirect::route('support.sip');
});

// обзор загружженых файлов
Route::group(array('before' => 'auth'), function()
{
    \Route::get('elfinder', 'Barryvdh\Elfinder\ElfinderController@showIndex');
    \Route::get('elfinder/ckeditor4', 'Barryvdh\Elfinder\ElfinderController@showCKeditor4');
    \Route::any('elfinder/connector', 'Barryvdh\Elfinder\ElfinderController@showConnector');
});

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'before' => 'auth'), function()
{
    Route::group(array('prefix' => 'blogs', 'namespace' => 'Blogs'), function()
    {
        Route::resource('rubrics', 'RubricsController', ['only' => ['index', 'store', 'update', 'destroy']]); // for blogs
        Route::get('subscriptions/unload', ['as' => 'subscriptions.unload',
                                            'uses' => 'SubscriptionsController@unload']);
        Route::resource('subscriptions', 'SubscriptionsController', ['only' => ['index']]);
    });
    Route::resource('blogs', 'BlogsController');

    Route::resource('security', 'SecurityController');
    Route::resource('news', 'NewsController');
    Route::group(array('prefix' => 'news', 'namespace' => 'News'), function()
    {
        Route::resource('big_news', 'BigNewsController', ['only' => ['store', 'update', 'destroy']]); // for news
    });

    Route::group(array('prefix' => 'works', 'namespace' => 'Works'), function()
    {
        Route::resource('categories', 'CategoriesController', ['only' => ['index', 'store', 'update', 'destroy']]); // for works
    });
    Route::resource('works', 'WorksController');

    Route::resource('banners', 'BannersController');
    Route::group(array('prefix' => 'support', 'namespace' => 'Support'), function()
    {
        Route::resource('addresses', 'AddressesController');
        Route::resource('asks', 'AsksController');
        Route::resource('instructions', 'InstructionsController');
    });
    Route::post('upload', 'UploadsController@upload');
});


Route::get('login', 'UserController@getLogin');
Route::get('logout', 'UserController@postLogin');

Route::get('blogs/{slug}', ['as' => 'blogs.show',
                            'uses' => 'BlogsController@show'])->where('slug', '[A-Za-z0-9\-]+');
Route::get('blogs/rubric/{slug}', ['as' => 'blogs.index.rubric',
                            'uses' => 'BlogsController@index'])->where('slug', '[A-Za-z0-9\-]+');
Route::resource('blogs', 'BlogsController', ['except' => ['show']]);


Route::resource('subscriptions', 'SubscriptionsController', ['only' => ['store']]);


Route::get('security/{slug}', ['as' => 'security.show',
                               'uses' => 'SecurityController@show'])->where('slug', '[A-Za-z0-9\-]+');
Route::resource('security', 'SecurityController', ['except' => ['show']]);

Route::get('news/{slug}', ['as' => 'news.show',
                           'uses' => 'NewsController@show'])->where('slug', '[A-Za-z0-9\-]+');
Route::resource('news', 'NewsController', ['except' => ['show']]);


Route::get('works/{slug}', ['as' => 'works.show',
                            'uses' => 'WorksController@show'])->where('slug', '[A-Za-z0-9\-]+');
Route::get('works/categories/{slug}', ['as' => 'works.index.category',
                            'uses' => 'WorksController@index'])->where('slug', '[A-Za-z0-9\-]+');
Route::resource('works', 'WorksController', ['except' => ['show']]);


Route::get('support/ask/{slug}', ['as' => 'support.ask.show',
                                  'uses' => 'SupportController@ask_show'])->where('slug', '[A-Za-z0-9\-]+');
Route::get('support/ask', ['as' => 'support.ask', 'uses' => 'SupportController@ask']);
Route::get('support/sip', ['as' => 'support.sip', 'uses' => 'SupportController@sip']);
Route::get('support/pod', ['as' => 'support.pod', 'uses' => 'SupportController@pod']);