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

Route::get('json', function(){
    return json_encode(['کاربران'=>40,'کارگران' => 90, 'مدیران'=>30,'مدیران میانی'=>70,'مدیران ارشد'=>10,'شرکت کنندگان'=>100],true);
});
