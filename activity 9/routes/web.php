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

Route::get('/', 'App\Http\Controllers\QuotesController@index');
Route::get('/quotes', 'App\Http\Controllers\QuotesController@quotes');
Route::get('/weather', 'App\Http\Controllers\QuotesController@weather');
Route::post('/sendquotes', 'App\Http\Controllers\QuotesController@sendquotes');
Route::post('/sendweather', 'App\Http\Controllers\QuotesController@sendweather');
Route::get('/test_quotes','App\Http\Controllers\QuotesController@test_quotes');
Route::get('/test_weather','App\Http\Controllers\QuotesController@test_weather');
    
