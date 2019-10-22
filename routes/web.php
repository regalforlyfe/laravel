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
//     return view('login');
// });
Route::get('/', 'LoginController@index');
Route::get('/register', 'LoginController@register');


Route::get('/home', 'HomeController@index');
Route::get('/pertama', 'HomeController@pertama');
Route::get('/kedua', 'HomeController@kedua');
Route::get('/ketiga', 'HomeController@ketiga');

Route::get('halo', function () {
    return "Halo selamat datang";
});
