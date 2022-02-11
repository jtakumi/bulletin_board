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
Route::get('/companies/com_index','CompanyController@index');
Route::get('/companies/com_create','CompanyController@create');
Route::get('/questions/create','QuestionController@create');
Route::post('/questions/','QuestionController@store');
Route::post('/companies/','CompanyController@store');
Route::get('/questions/{question}','QuestionController@show');
Route::get('/companies/{company}','CompanyController@show');
Route::put('/questions/{question}','QuestionController@update');
Route::put('/companies/{company}','CompanyController@update');
Route::get('/questions/{question}/edit','QuestionController@edit');
Route::get('/companies/{company}/com_edit','CompanyController@edit');
Route::delete('/questions/{question}','QuestionController@delete');
Route::delete('/companies/{company}','CompanyController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
