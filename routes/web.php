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
    return view('home');
});
Route::get('/', 'PageController@home');
Route::get('/discover', 'PageController@discover');
Route::get('/trending', 'PageController@trending');
Route::get('/feed', 'PageController@home')->name('home');
Route::get('/video/{id}', 'MediaController@showVideo');
Route::get('/video/{id}/like', 'LikeController@likePost');
Route::get('/video/{id}/dislike', 'LikeController@dislikePost');
Route::get('/video/{id}/repost', 'RepostController@repost');
Route::get('/video/{id}/norepost', 'RepostController@norepost');


Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('choose-account', 'UserController@chooseAccountType')->middleware('auth');
Route::put('choose-account', 'UserController@saveAccountType')->middleware('auth');

Auth::routes();
Route::get('/upload/video', 'PostController@uploadVideo');
Route::post('/upload/video', 'PostController@saveVideo');
Route::get('/{username}', 'UserController@profile');
Route::get('/{username}/videos', 'UserController@videos');
Route::get('/{username}/follow', 'UserController@follow');
Route::get('/{username}/unfollow', 'UserController@unfollow');




// Route::get('/home', 'HomeController@index')->name('home');
