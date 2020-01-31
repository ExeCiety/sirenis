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

Route::group(['prefix' => 'users', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', 'UsersController@dashboard')->name('users.dashboard');
    Route::get('/profile', 'UsersController@profile')->name('users.profile');
});
