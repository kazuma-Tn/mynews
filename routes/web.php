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
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create','Admin\NewsController@add')->middleware('auth');
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create',
/* Lalavel12 課題２*/
'Admin\ProfileController@add')->middleware('auth');
    Route::get('profile/edit',
/*Laravel12 課題３*/
'Admin\ProfileController@edit')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
