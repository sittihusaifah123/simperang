<?php

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user','UserController@index');

//pengajuan
Route::resource('/pengajuan', 'PengajuanController');
Route::get('/pengajuan/status', 'PengajuanController@status')->name('status-pengajuan');

