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
    return view('feed');
});

Route::get('/discover', function () {
    return view('discover');
});
Route::get('/trending', function () {
    return view('trending');
});

Route::get('/video/{test}', function () {
    return view('media/video');
});

Route::get('/register', function () {
    // return view('media/video');
});

Route::get('/login', function () {
    // return view('media/video');
});

Route::get('/{username}', function () {
    return view('users/profile');
});

Route::get('/{username}/videos', function () {
    return view('home');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
