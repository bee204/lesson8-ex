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

Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/{user}', 'UsersController@show')->name('users.show');
Route::get('/user/store', 'UsersController@store')->name('users.store');
Route::get('/user/create', 'UsersController@create')->name('users.create');
Route::get('/users/edit/{user}', 'UsersController@edit')->name('users.edit');
Route::get('/user/update/{user}', 'UsersController@update')->name('users.update');
Route::get('/user/delete/{user}', 'UsersController@destroy')->name('users.delete');

// Route::resource('users', 'UsersController');