<?php

use Illuminate\Http\Request;
// use App\Http\Controller\NameController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//get all names
Route::get('name','NameController@allName');
//get names by id
Route::get('name/{id}','NameController@nameById');
//add names
Route::post('addname','NameController@addName');
//update names
Route::post('edit/{id}','NameController@updateName');
//delete names
Route::delete('delete/{id}','NameController@delete');
