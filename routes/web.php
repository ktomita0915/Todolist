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

Route::get('/', 'TodolistFormController@index');
Route::get('/create-page','TodolistFormController@index');
Route::get('/create','TodolistFormController@index');
Route::get('/delete-page/{id}','TodolistFormController@deletePage');
Route::get('/delete/{id}','TodolistFormController@delete');
