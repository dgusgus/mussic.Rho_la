<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function (){
    Route::get('user', 'Usercontroller@index')->name('user.index');
    Route::get('user/show/{id}', 'Usercontroller@show')->name('user.show');
    Route::get('user/edit/{id}', 'Usercontroller@edit')->name('user.edit');
    Route::get('user/delete/{id}', 'Usercontroller@destroy')->name('user.delete');
    Route::get('create/user', 'Usercontroller@create')->name('user.create');
    Route::get('store', 'UserController@store')->name('user.store');
    Route::get('{id}/update', 'UserController@update')->name('user.update');
});

Route::get('create', 'MusicController@create')->name('music.createsong');
Route::get('storemusic', 'MusicController@storemusic')->name('music.storemusic');
