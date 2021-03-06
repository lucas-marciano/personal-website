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

Route::get('/', 'FrontEndController@index');

Auth::routes();
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('projects',     'ProjectsController');
    Route::resource('users',        'UsersController');
    Route::resource('tecnologies',  'TecnologiesController');
    Route::resource('settings',     'SettingsController');
});
