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

Route::get('/', function () {
    return view('welcome');
});


// Routes from Debugbar
Route::get('/loremlipsum', 'P3Controller@getLoremlipsum');

// Index route
Route::get('/books', 'P3Controller@getIndex');

// Show title route
Route::get('/books/show/{title?}', 'P3Controller@getShow');

// Create route
Route::get('/books/create', 'P3Controller@getCreate');

// Post create
Route::post('/books/create', 'P3Controller@postCreate');

// Log viewer route
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
