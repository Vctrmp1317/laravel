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

Route::get('/','ForumController@index');
Route::get('/forums/{forum}', 'ForumController@show');

Route::get('controlador/{name}','PruebaController@name');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/forums', 'ForumController@store');
