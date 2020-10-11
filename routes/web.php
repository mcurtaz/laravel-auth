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

// Con i comandi da terminale composer require laravel/ui:^2.4 e php artisan ui vue --auth (validi per laravel 7. da laravel 8 sono cambiati fare riferimento alla documentazione) si crea automaticamente lo scaffolding e i file di laravel per gestire la auth (cioè registrazione utenti, login register e logout). Con i comandi laravel si tira dentro anche bootstrap che utilizza nelle pagine che crea automaticamente di login e register. Le pagine di login e registrazione sono già create da laravel ma volendo si può customizzare tutto. documentazione laravel https://laravel.com/docs/7.x/authentication

Auth::routes();

// Alcune rotte, gestite dal GuestController sono accessibili a tutti. Le rotte gestite dal LoggedController sono accessibili soltanto ad utenti registrati. In questo caso un utente guest ha accesso alla lista degli employee e alla show del singolo employee. 
Route::get('/', 'GuestController@index')-> name('employee-index');
Route::get('/show/{id}', 'GuestController@show') -> name('employee-show');

// Le rotte per create update e delete sono gestite dal LoggedController e sono quindi accessibili solo ad utenti registrati. Se un utente guest prova ad accedere ad una di queste pagine viene reiderizzato alla pagina di login (creata in automatico da laravel ma customizzabile)
Route::get('/destroy/{id}', 'LoggedController@destroy') -> name('employee-destroy');
Route::get('/edit/{id}', 'LoggedController@edit') -> name('employee-edit');
Route::post('/update/{id}', 'LoggedController@update') -> name('employee-update');
Route::get('/create', 'LoggedController@create') -> name('employee-create');
Route::post('/create', 'LoggedController@store') -> name('employee-store');
