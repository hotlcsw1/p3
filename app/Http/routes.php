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

// Route for home
Route::get('/', function () {
    return view('welcome');
});

// Route for /Lorem Lipsum
Route::get('/loremlipsum', 'P3Controller@getLoremlipsum');

// Route for Random User
Route::get('/randomuser', 'P3Controller@getRandomUser');
