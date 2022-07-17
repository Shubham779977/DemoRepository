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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('', 'App\Http\Controllers\MyController@index');
Route::get('', 'App\Http\Controllers\MyController@index')->name('show');
Route::get('/emp_create', 'App\Http\Controllers\MyController@emp_create');
Route::post('/show', 'App\Http\Controllers\MyController@insert');
Route::get('/show','App\Http\Controllers\MyController@show')->name('show');

