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
//get all category
Route::get('/', 'CategoryController@getCategory');
//get solo view per id
Route::get('/soloview/{cate}', 'CategoryController@viewCategory');
//get create view
Route::get('/create', 'CategoryController@createCategory');
//validasi create
Route::post('/', 'CategoryController@validasiCategory');
//delete (no looping)
Route::delete('/soloview/{cate}', 'CategoryController@deleteCategory');
//get view edit, edit must use get id
Route::get('/soloview/{cate}/edit', 'CategoryController@viewEdit');
//validasi edit
Route::put('/soloview/{cate}', 'CategoryController@validasiEdit');



