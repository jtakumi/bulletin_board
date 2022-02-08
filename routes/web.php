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
Route::get('/companies/com_index','CompanyController@com_index');
Route::get('/companies/com_create','CompanyController@com_create');
Route::get('/questions/create2','QuestionController@create2');
Route::post('/questions','QuestionController@store2');
Route::post('/companies','CompanyController@com_store');
Route::get('/questions/{questions}','QuestionController@show2');
Route::get('/companies/{companies}','CompanyController@com_show');
Route::put('/questions/{questions}','QuestionController@update2');
Route::put('/companies/{companies}','CompanyController@com_update');
Route::get('/questions/{questions}/edit2','QuestionController@edit2');
Route::get('/companies/{companies}/com_edit','CompanyController@com_edit');
Route::delete('/questions/{questions}','QuestionController@delete');
Route::delete('/companies/{companies}','CompanyController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
