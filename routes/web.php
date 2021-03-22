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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/profile', function () {
//    return view('profile');
//});

Route::get('/profile', 'ProfileController@index');

Route::get('/profile/cache', 'ProfileController@cache');

Route::get('/', 'WelcomeController@index');

Route::get('/operation/{op_code}', 'OperationController@show');

//Route::get('/test', 'DatabaseController@index');

Route::get('/test', 'TestController@index');