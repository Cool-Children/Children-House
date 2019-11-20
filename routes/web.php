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

/***** View *****/

Route::get('/', function () {
    return view('/Home/home');
});

Route::get('/sign_up', function () {
    return view('/sign_up/sign_up');
});

Route::get('/sign_in', function () {
    return view('/Sign_in/sign_in');
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
/*#### View End ####*/

/***** Post *****/

// Route::post('/register','Controller@Register_controller');
Route::resource('/register','Register_controller');
// Route::post('/register','Register_controller@store');
/*#### Post End ####*/
