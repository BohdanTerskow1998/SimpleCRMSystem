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

Route::get('/', 'App\Http\Controllers\ProjectController@index')->name('welcome');
Route::post('/', 'App\Http\Controllers\ProjectController@sendData');
Route::get('/persons', 'App\Http\Controllers\ProjectController@list');

Route::get('/update/{id}', 'App\Http\Controllers\ProjectController@update_page')->name('update');
Route::post('/update/{id}', 'App\Http\Controllers\ProjectController@update_record');

Route::get('/delete/{name}', 'App\Http\Controllers\ProjectController@delete')->name('delete');

