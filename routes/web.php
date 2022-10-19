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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'BBSController@top');
Route::post('/top_post', 'BBSController@top_post');
Route::get('/edit', 'BBSController@edit');
Route::get('/destory/{id}', 'BBSController@destory');
Route::get('/write/{id}', 'BBSController@write');


Route::get('/comment/{id}', 'BBSController@comment');
Route::post('/comment_save', 'BBSController@comment_save');
Route::get('/edit_comme', 'BBSController@edit_comme');
Route::get('/destory_comme/{id}', 'BBSController@destory_come');
Route::get('/write_comme/{id}', 'BBSController@write_come');