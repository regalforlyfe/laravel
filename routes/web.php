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

Route::get('/base', 'AdminController@basefungsi') ;
Route::get('/dashboard', 'AdminController@dashboardfungsi')-> name('dashboard') ;
Route::get('/table', 'AdminController@tablefungsi')-> name('table') ;
Route::get('/chart', 'AdminController@chartfungsi')-> name('chart') ;
Route::get('/product', 'AdminController@productfungsi')-> name('product') ;

Route::resource('kategori', 'KategoriController');

Route::get('halo', function () {
    return "Halo selamat datang";
});
