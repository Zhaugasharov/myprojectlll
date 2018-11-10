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

Route::get('/', 'IndexController@index');
Route::get('/ajax/static-data', 'AjaxController@getStaticData');
Route::get('/ajax/user', 'AjaxController@getUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('advert/save', 'AdvertController@save');
Route::get('advert/save/{id}', 'AdvertController@save');
