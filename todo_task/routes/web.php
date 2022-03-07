<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\TodoController@index' );
Route::get('/addTask', 'App\Http\Controllers\TodoController@addTask');
Route::post('/saveTask', 'App\Http\Controllers\TodoController@saveTask');
Route::get('/delete/{id}', 'App\Http\Controllers\TodoController@destroy');
Route::get('/update/{id}', 'App\Http\Controllers\TodoController@update');
Route::get('/updateTask/{id}', 'App\Http\Controllers\TodoController@updateTask');