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

Route::get('/', function () {
    return view('master');
});

//route pertanyaan

Route::get('/ask', 'AskController@index');
Route::get('/ask/create', 'AskController@create');
Route::post('/ask', 'AskController@store');
Route::get('/ask/{id}', 'AskController@show');
Route::get('/ask/{id}/edit','AskController@edit' );
Route::put('/ask/{id}', 'AskController@update');
Route::delete('/ask/{id}', 'AskController@destroy');

//route jawaban
Route::get('/answer/{id}', 'AnswerController@index');
Route::post('/answer/{id}','AnswerController@store');