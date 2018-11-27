<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function () {
    Route::group(['prefix' => 'tasks'], function () {
        Route::get('/', 'TaskController@index')->name('task.index');
        Route::post('/', 'TaskController@store')->name('task.store');
        Route::get('/{id}/edit', 'TaskController@edit')->name('task.edit');
        Route::put('/{id}', 'TaskController@update')->name('task.update');
        Route::delete('/{id}', 'TaskController@destroy')->name('task.destroy');
    });
});