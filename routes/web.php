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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\JtweetController::class, 'show'])->name('top');

Route::get('/top', [App\Http\Controllers\JtweetController::class, 'show']);

Route::get('/jtweet/{id}', [App\Http\Controllers\JtweetController::class, 'show']);

//Route::get('twitter', 'App\Http\Controllers\TwitterController@index');