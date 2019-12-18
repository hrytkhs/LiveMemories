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

Route::get('/', function () {return view('top');});

Route::get('/posts/search', 'SearchController@index')->name('posts.search');

Auth::routes();

Route::resource('users', 'UserController');

Route::resource('posts', 'PostController');

Route::resource('artists', 'ArtistController');

Route::get('company', function () {return view('company');});

Route::get('/login/{provider}', 'Auth\SocialController@redirectToProvider');

Route::get('/login/{provider}/callback', 'Auth\SocialController@handleProviderCallback');
