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
Route::get('index', function () {
    return view('index');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('category', function () {
    return view('category');
});
Route::get('single-product', function () {
    return view('single-product');
});
Route::get('kacer', function () {
    return view('kacer');
});
Route::get('anis', function () {
    return view('anis');
});
Route::get('murai', function () {
    return view('murai');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
