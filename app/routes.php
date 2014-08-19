<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('manager', 'ManagerController');

Route::resource('corsi', 'CorsiController');

Route::resource('docenti', 'DocentiController');

Route::resource('contratti', 'ContrattiController');

Route::post('docente/quick_update', 'DocentiController@postQuickUpdate');
