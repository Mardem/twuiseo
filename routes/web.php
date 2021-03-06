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
  Route::get('/project', 'Admin\ProjectsController@home')->name('project');
  Route::get('/project/status/{code}/{id}', 'Admin\ProjectsController@changeStatus')->name('changeStatus');
  Route::get('/project/view/{id}', 'Admin\ProjectsController@view')->name('viewProject');
  Route::post('/project/time-finish', 'Admin\ProjectsController@finish')->name('setFinish');
  Route::post('/contact/reply', 'Admin\ContactsController@response')->name('contactReply');
  Route::get('/update-time/{opt}/{id}', 'Admin\RestTimeController@update')->name('restTime');
  Route::get('/update-time', 'Admin\RestTimeController@index')->name('homeRest');
});

// Contact links
Route::group(['prefix' => 'contact'], function() {
  Route::post('/front', 'ContactController@front');
  Route::post('/back', 'ContactController@back');
});
