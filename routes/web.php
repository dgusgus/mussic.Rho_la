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

Route::get('/home', 'MusicController@index')->name('music.indexsong');

Route::group(['middleware' => 'auth'], function (){
    /* rutas de los usuarios  */
    Route::get('user', 'Usercontroller@index')->name('user.index');
    Route::get('user/show/{id}', 'Usercontroller@show')->name('user.show');
    Route::get('user/edit/{id}', 'Usercontroller@edit')->name('user.edit');
    Route::get('user/delete/{id}', 'Usercontroller@destroy')->name('user.delete');
    Route::get('create/user', 'Usercontroller@create')->name('user.create');
    Route::get('store', 'UserController@store')->name('user.store');
    Route::get('{id}/update', 'UserController@update')->name('user.update');
    /* rutas de la musica */
    Route::get('music/create', 'MusicController@create')->name('music.createsong');
    Route::post('music/store', 'MusicController@store')->name('music.store');
    Route::get('index', 'MusicController@index')->name('music.indexsong'); 
    Route::get('music/delete{id}','MusicController@destroy')->name('music.delete');
    Route::get('music/Dowload/{id}','MusicController@getDowload')->name('music.Dowload');
    /* rutas de las denuncias  */
    Route::get('index', 'ComplainController@index')->name('complaint.indexcomplain');
    Route::get('complain/create','ComplainController@create')->name('complaint.createcomplain');
    Route::post('complain/store', 'ComplainController@store')->name('complain.store');

});


