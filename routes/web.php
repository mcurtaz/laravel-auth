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


Auth::routes();

Route::get('/', 'GuestController@index')-> name('employee-index');
Route::get('/show/{id}', 'GuestController@show') -> name('employee-show');

Route::get('/destroy/{id}', 'LoggedController@destroy') -> name('employee-destroy');
Route::get('/edit/{id}', 'LoggedController@edit') -> name('employee-edit');
Route::post('/update/{id}', 'LoggedController@update') -> name('employee-update');
Route::get('/create', 'LoggedController@create') -> name('employee-create');
Route::post('/create', 'LoggedController@store') -> name('employee-store');
