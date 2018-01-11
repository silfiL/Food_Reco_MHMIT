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
    return view('welcome');
})->name('homepage');
Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('/logout',function(){
    Auth::logout();
    return view('logout');
})->name('my-logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/article', 'ArticleController');