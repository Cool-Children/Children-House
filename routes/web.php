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
    return view('welcome');
});

Route::get('/sign_up', function () {
    return view('/sign_up/sign_up');
});
/*#### View End ####*/

/***** Post *****/

Route::post('/register','Controller@register');
/*#### Post End ####*/
