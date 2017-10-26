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

Route::get('messages', 'MessagesController@index');
Route::get('messages/create', 'MessagesController@create');
Route::get('masseges/{id}', 'MessagesController@show');

Route::post('messages', 'MessagesController@store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helo', 'HeloController@getIndex');

//Route::post('/helo', 'HeloController@postIndex');

// Route::get('messages', 'MessagesController@index');
Route::get('messages/create', 'MessagesController@create');
Route::get('messages/{id}', 'MessagesController@show');
?>
