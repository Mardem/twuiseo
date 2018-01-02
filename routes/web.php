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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Administrator routes
Route::group(['middleware' => 'auth', 'as' => 'admin.', 'prefix' => 'admin'], function() {
  Route::get('/dashboard', 'Admin\AdminController@index')->name('dash');
  Route::get('/contact', 'Admin\AdminController@contact')->name('contacts');
});

// Contact links
Route::group(['prefix' => 'contact'], function() {
  Route::post('front', 'ContactController@front');
  Route::post('back', 'ContactController@back');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
