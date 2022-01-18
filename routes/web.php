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

Route::get('/','QuestionController@index2');
Route::get('/question/create','QuestionController@create2');
Route::post('/question','QuestionController@store2');
Route::get('/question/{question}','QuestionController@show2');
Route::put('/question/{question}','QuestionController@update2');
Route::get('/question/{question}/edit','QuestionController@edit2');
Route::delete('/question/{question}','QuestionController@delete2');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
