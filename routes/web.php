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

Route::get('/w', function () {
    return view('/welcome');
});

Route::get('/', function () {
    return view('/Home/home');
});

Route::get('/about', function () {
    return view('/Nav_bar/about');
});

Route::get('/events', function () {
    return view('/Nav_bar/events');
});

Route::get('/blog', function () {
    return view('/Blog/blog');
});

// Auth::routes();

// Route::get('/Normal_users/normal_users', 'HomeController@index')->name('normal_users');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
