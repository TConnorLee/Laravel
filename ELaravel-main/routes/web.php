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
//Frontend
Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/trangchu','App\Http\Controllers\HomeController@index');


//Backend
Route::get('/admin','App\Http\Controllers\AdminController@index');
