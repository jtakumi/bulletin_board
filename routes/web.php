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
#保存
/*Route::get('/','PostController@index');
Route::get('/posts/create','PostController@create');
Route::post('/posts','PostController@store');
Route::get('/posts/{post}','PostController@show');
Route::put('/posts/{post}','PostController@update');
Route::get('/posts/{post}/edit','PostController@edit');
Route::delete('/posts/{post}','PostController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/','QuestionController@index');
Route::get('/question/create','QuestionController@create');
Route::post('/question','QuestionController@store');
Route::get('/question/{question}','QuestionController@show');
Route::put('/question/{question}','QuestionController@update');
Route::get('/question/{question}/edit','QuestionController@edit');
Route::delete('/question/{question}','QuestionController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
