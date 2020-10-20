<?php
Route::group(['namespace'=>'Azamjon99\Register\Http\Controllers', 'middleware' => ['web']], function(){

Route::get('/showRegister','RegisterController@showRegister');
Route::get('/index','RegisterController@index');
Route::post('/register','RegisterController@register')->name('register');
Route::get('/showSuccess','RegisterController@showSuccess')->name('success');

});