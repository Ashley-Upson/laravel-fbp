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

Auth::routes();

Route::get('/home', 'MainController@index')->name('main');

Route::get('/', function() {
    return redirect()->route('main');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/blueprints', 'BlueprintsController@showAll')->name('all-blueprints');
    Route::get('/blueprints/user/{user}', 'BlueprintsController@userBlueprints')->name('user-blueprints');
    Route::get('/blueprints/saved/{user}', 'BlueprintsController@savedBlueprints')->name('saved-blueprints');
    Route::get('/blueprints/add', 'BlueprintsController@addBlueprint')->name('add-blueprint');
});