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

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->prefix('post')->group(function (){
    Route::get('/','PostController@index')->name('post.index');
    Route::get('/create','PostController@create')->name('post.create');
    Route::post('/store','PostController@store')->name('post.store');
    Route::get('/{id}/edit','PostController@edit')->name('post.edit');
    Route::post('/{id}/update','PostController@update')->name('post.update');
    Route::get('/{id}/delete','PostController@delete')->name('post.delete');
});

Auth::routes();


