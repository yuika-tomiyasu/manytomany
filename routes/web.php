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



Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');


Route::get('/', function () {
    return view('welcome');
});

Route::get('messages.create', 'MessagesController@create') ->name('messages.create');
Route::post('messages', 'MessagesController@store')->name('messages.store');
Route::get('messages.index', 'MessagesController@index')->name('messages.index');


Route::get('messages.edit/{id}', 'MessagesController@edit')->name('messages.edit');
Route::get('messages/{id}', 'MessagesController@show')->name('messages.show');
Route::delete('messages.destroy/{id}', 'MessagesController@destroy')->name('messages.destroy');
Route::put('messages.update/{id}', 'MessagesController@update')->name('messages.update');

//users
Route::get('users.index', 'UsersController@index')->name('users.index');
Route::get('users.show/{user_id}', 'UsersController@show')->name('users.show');
?>
