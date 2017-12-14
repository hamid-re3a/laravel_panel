<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();

Route::get('/','DashboardController@index');

Route::match(['post','get'],'packet', 'DashboardController@showPacket');
Route::get('packet/show/{id}', 'DashboardController@showXml');
Route::match(['post','get'],'filter','DashboardController@filterPacket');
