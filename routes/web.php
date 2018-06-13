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

Auth::routes(); // Login, logout etc.

Route::get('/', 'MainController@index')->name('main');

Route::group(['prefix' => 'blueprints'], function() {
    Route::get('/', 'BlueprintController@showAll')->name('all-blueprints');
    Route::get('view/{blueprint}', 'BlueprintController@show')->name('view-blueprint');
    Route::get('user/{user}', 'BlueprintController@userBlueprints')->name('user-blueprints');
    Route::get('saved/{user}', 'BlueprintController@savedBlueprints')->name('saved-blueprints');

    Route::group(['middleware' => 'auth'], function() {
        Route::get('add', 'BlueprintController@add')->name('add-blueprint');
        Route::get('edit/{blueprint}', 'BlueprintController@edit')->name('edit-blueprint');

        Route::post('add', 'BlueprintController@create')->name('create-blueprint');
        Route::post('update/{id}', 'BlueprintController@update')->name('update-blueprint');
        Route::post('delete/{id}', 'BlueprintController@delete')->name('delete-blueprint');
    });
});
