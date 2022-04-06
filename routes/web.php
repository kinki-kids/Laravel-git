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

Route::get('/', 'MessagesController@index');

/*
//メッセージの個別最小ページ表示
Route::get('messages/{id}', 'MessagesController@show');
//メッセージの個別登録処理
Route::post('messages', 'MessagesController@store');
//メッセージの更新処理
Route::put('messages/{id}', 'MessagesController@update');
//メッセージの削除
Route::delete('messages/{id}', 'MessagesController@destroy');

//一覧表示のページ
Route::get('messages', 'MessagesController@index')->name('messages.index');
//新規作成フォームのページ
Route::get('messages/create', 'MessagesController@create')->name('messages.create');
//更新用のフォームページ
Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');
*/

Route::resource('messages', 'MessagesController');