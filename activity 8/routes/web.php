<?php

use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmailMailable;
use Carbon\Carbon;

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



// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/about', function () {
//     return view('about');
// });


// Route::get('/projects', function () {
//     return view('projects');
// });


// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', 'App\Http\Controllers\PortfolioController@index');
Route::get('/about', 'App\Http\Controllers\PortfolioController@about');
Route::get('/projects', 'App\Http\Controllers\PortfolioController@projects');
Route::get('/contact', 'App\Http\Controllers\PortfolioController@contact');
Route::post('/contact', 'App\Http\Controllers\PortfolioController@save');


// Route::get('/sendEmail', function(){
//     // Mail::to('sathishprakash233@gmail.com')->send(new SendEmailMailable());
//     // dispatch(new SendEmailJob());

//     $job = (new SendEmailJob())->delay(Carbon::now()->addSeconds(10));
//     dispatch($job);
//     return 'Email sent successfully';
// });

