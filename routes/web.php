<?php
use App\Http\Controllers\LoginWithGoogleController;

//google login function
Route::get('/login/google','LoginWithGoogleController@getGoogleRedirect');
Route::get('/login/google/callback','LoginWithGoogleController@loginGoogleCallback');
//permission accesess only logined user
Route::group(['middleware' => ['auth']],function(){
    Route::get('/','QuestionController@index');
    Route::get('/companies/com_index','CompanyController@index');
    Route::get('/companies/com_create','CompanyController@create');
    Route::get('/questions/create','QuestionController@create');
    Route::post('/questions/','QuestionController@store');
    Route::post('/companies/','CompanyController@store');
    Route::get('/questions/{question}/edit','QuestionController@edit');
    Route::get('/companies/{company}/com_edit','CompanyController@edit');
    Route::get('/questions/{question}','QuestionController@show');
    Route::get('/companies/{company}','CompanyController@show');
    Route::put('/questions/{question}','QuestionController@update');
    Route::put('/companies/{company}','CompanyController@update');
    Route::delete('/questions/{question}','QuestionController@delete');
    Route::delete('/companies/{company}','CompanyController@delete');
    //mail function
    Route::get('/notice','NoticeController@index')->name('notice.index');
    Route::get('/notice/mail/make','NoticeController@mailMake')->name('notice.mail.make');
    Route::post('/notice/mail/confirm','NoticeController@mailConfirm')->name('notice.mail.confirm');
    Route::post('/notice/mail/send','NoticeController@mailSend')->name('notice.mail.send');

    Auth::routes();
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();