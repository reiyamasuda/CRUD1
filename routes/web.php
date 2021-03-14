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

Route::get('/', 'CustomerController@index')->name('index');

Route::post('/', 'CustomerController@search')->name('search');

Route::get('/create', 'CustomerController@create')->name('create');

Route::get('/detail', 'CustomerController@detail')->name('detail');

Route::get('/edit', 'CustomerController@edit')->name('edit');

Route::post('/store', 'CustomerController@store')->name('store');

Route::post('/update', 'CustomerController@update')->name('update');

Route::get('/delete', 'CustomerController@delete')->name('delete');
