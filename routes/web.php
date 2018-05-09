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

Route::get('/', 'frontpc\HomeController@index');
Route::get('/home', 'frontpc\HomeController@index');
Route::get('/category', 'frontpc\CategoryController@index');
Route::get('/archives', 'frontpc\ArchivesController@index');
Route::get('/open', 'frontpc\OpenController@index');
Route::get('/about', 'frontpc\AboutController@index');
Route::get('/label', 'frontpc\LabelController@index');
