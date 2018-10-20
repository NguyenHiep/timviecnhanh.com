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
Route::group(['prefix' => 'manage', 'namespace' => 'Manage' ], function (){
  Route::group(['prefix' => 'tasks'], function (){
      Route::get('/', 'TaskController@index')->name('task.index');
      Route::get('/status', 'TaskController@index_status')->name('status.index');
      Route::get('/tags', 'TaskController@index_tags')->name('tags.index');
      Route::get('/calendar', 'TaskController@index_calendar')->name('calendar.index');
  });
 /* Route::get('/status', 'TaskController@status')->name('task.status');
  Route::get('/tags', 'TaskController@tags')->name('task.tags');*/
});