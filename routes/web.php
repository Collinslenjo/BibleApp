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

Route::get('/','BooksInfoController@index');

Route::get('genesis','BibleviewController@genesis');
Route::get('exodus','Exodus@index');
Route::get('leviticus','BibleviewController@leviticus');
Route::get('numbers','BibleviewController@numbers');
Route::get('deutronomy','BibleviewController@deutronomy');
Route::get('joshua','BibleviewController@joshua');
Route::get('judges','BibleviewController@judges');
Route::get('ruth','BibleviewController@ruth');
Route::get('samuel-1','BibleviewController@samuel1');
Route::get('samuel-2','BibleviewController@samuel2');
