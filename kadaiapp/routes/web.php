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
// ホームページの設定
Route::get('/', 'ViewHomeController@index')->name('viewhome');

// 新規登録ページに関するルーティング
Route::get('/register', 'ViewRegisterController@index')->name('viewregister');
Route::post('/register', 'ViewRegisterController@post')->name('viewregister');

// ログインページの設定
Route::get('/login', 'ViewLoginController@index')->name('viewlogin');
