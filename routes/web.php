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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/student/{name}', function ($name) {
    return $name;
});

Route::get('my/{name?}', 'MyController@index');



Route::resource('user', 'UserController');
Route::get('profile', 'ProfileController@index');
