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
Route::get('/contact/view/{id}', 'HomeController@view')->name('viewContact');
Route::post('/new-project', 'HomeController@newProject')->name('newProject');

// Administrator routes
Route::group(['middleware' => 'auth', 'as' => 'admin.', 'prefix' => 'admin'], function() {
  Route::get('/dashboard', 'Admin\AdminController@index')->name('dash');
  Route::get('/contact', 'Admin\AdminController@contact')->name('contact');
  Route::get('/contact/view/{id}', 'Admin\ContactsController@view')->name('contactShow');
  Route::get('/contact/delete/{id}', 'Admin\ContactsController@delete')->name('contactDelete');
  Route::get('/project/view/{id}', 'Admin\ProjectsController@view')->name('viewProject');
  Route::post('/contact/reply', 'Admin\ContactsController@response')->name('contactReply');
});

// Contact links
Route::group(['prefix' => 'contact'], function() {
  Route::post('/front', 'ContactController@front');
  Route::post('/back', 'ContactController@back');
});
