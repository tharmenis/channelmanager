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

Route::get('/', 'HomeController@getIndex');
Route::controller('properties', 'PropertiesController');
Route::controller('rooms', 'RoomsController');
Route::controller('channels', 'PropertiesChannelsController');
Route::controller('bulk', 'BulkController');
Route::controller('reservations', 'ReservationsController');
Route::controller('simulator', 'SimulatorController');