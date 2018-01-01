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
Route::get('/users','DashboardController@users');

Route::get('json', function(){
    return json_encode(['کاربران'=>40,'کارگران' => 90, 'مدیران'=>30,'مدیران میانی'=>70,'مدیران ارشد'=>10,'شرکت کنندگان'=>100],true);
});
Route::get('people', function(){
    return json_encode([
        ['firstName'=>'علی','lastName'=>'مستوفی','fatherName'=>'عبداله','date'=>mktime(0, 0, 0, 7, 1, 2010),'birthCity'=>'تهران','countryId'=>'00644812453'],
        ['firstName'=>'سعید','lastName'=>'بی غم','fatherName'=>'فردوس','date'=>mktime(0, 0, 0, 7, 1, 2012),'birthCity'=>'البرز','countryId'=>'00644823158'],
        ['firstName'=>'زهرا','lastName'=>'شباهنگ','fatherName'=>'ماجد','date'=>mktime(0, 0, 0, 7, 1, 1990),'birthCity'=>'ایلام','countryId'=>'00214812342'],
        ['firstName'=>'فاطمه','lastName'=>'اعلایی','fatherName'=>'وحید','date'=>mktime(0, 0, 0, 7, 1, 1991),'birthCity'=>'تهران','countryId'=>'00241253245'],
        ['firstName'=>'شاهین','lastName'=>'کاظمی','fatherName'=>'حمید','date'=>mktime(0, 0, 0, 7, 1, 1992),'birthCity'=>'اهواز','countryId'=>'00644214134'], ['firstName'=>'علی','lastName'=>'مستوفی','fatherName'=>'عبداله','date'=>mktime(0, 0, 0, 7, 1, 2010),'birthCity'=>'تهران','countryId'=>'00644812453'],
        ['firstName'=>'سعید','lastName'=>'بی غم','fatherName'=>'فردوس','date'=>mktime(0, 0, 0, 7, 1, 2012),'birthCity'=>'البرز','countryId'=>'00644823158'],
        ['firstName'=>'زهرا','lastName'=>'شباهنگ','fatherName'=>'ماجد','date'=>mktime(0, 0, 0, 7, 1, 1990),'birthCity'=>'ایلام','countryId'=>'00214812342'],
        ['firstName'=>'فاطمه','lastName'=>'اعلایی','fatherName'=>'وحید','date'=>mktime(0, 0, 0, 7, 1, 1991),'birthCity'=>'تهران','countryId'=>'00241253245'],
        ['firstName'=>'شاهین','lastName'=>'کاظمی','fatherName'=>'حمید','date'=>mktime(0, 0, 0, 7, 1, 1992),'birthCity'=>'اهواز','countryId'=>'00644214134'], ['firstName'=>'علی','lastName'=>'مستوفی','fatherName'=>'عبداله','date'=>mktime(0, 0, 0, 7, 1, 2010),'birthCity'=>'تهران','countryId'=>'00644812453'],
        ['firstName'=>'سعید','lastName'=>'بی غم','fatherName'=>'فردوس','date'=>mktime(0, 0, 0, 7, 1, 2012),'birthCity'=>'البرز','countryId'=>'00644823158'],
        ['firstName'=>'زهرا','lastName'=>'شباهنگ','fatherName'=>'ماجد','date'=>mktime(0, 0, 0, 7, 1, 1990),'birthCity'=>'ایلام','countryId'=>'00214812342'],
        ['firstName'=>'فاطمه','lastName'=>'اعلایی','fatherName'=>'وحید','date'=>mktime(0, 0, 0, 7, 1, 1991),'birthCity'=>'تهران','countryId'=>'00241253245'],
        ['firstName'=>'شاهین','lastName'=>'کاظمی','fatherName'=>'حمید','date'=>mktime(0, 0, 0, 7, 1, 1992),'birthCity'=>'اهواز','countryId'=>'00644214134'], ['firstName'=>'علی','lastName'=>'مستوفی','fatherName'=>'عبداله','date'=>mktime(0, 0, 0, 7, 1, 2010),'birthCity'=>'تهران','countryId'=>'00644812453'],
        ['firstName'=>'سعید','lastName'=>'بی غم','fatherName'=>'فردوس','date'=>mktime(0, 0, 0, 7, 1, 2012),'birthCity'=>'البرز','countryId'=>'00644823158'],
        ['firstName'=>'زهرا','lastName'=>'شباهنگ','fatherName'=>'ماجد','date'=>mktime(0, 0, 0, 7, 1, 1990),'birthCity'=>'ایلام','countryId'=>'00214812342'],
        ['firstName'=>'فاطمه','lastName'=>'اعلایی','fatherName'=>'وحید','date'=>mktime(0, 0, 0, 7, 1, 1991),'birthCity'=>'تهران','countryId'=>'00241253245'],
        ['firstName'=>'شاهین','lastName'=>'کاظمی','fatherName'=>'حمید','date'=>mktime(0, 0, 0, 7, 1, 1992),'birthCity'=>'اهواز','countryId'=>'00644214134'], ['firstName'=>'علی','lastName'=>'مستوفی','fatherName'=>'عبداله','date'=>mktime(0, 0, 0, 7, 1, 2010),'birthCity'=>'تهران','countryId'=>'00644812453'],
        ['firstName'=>'سعید','lastName'=>'بی غم','fatherName'=>'فردوس','date'=>mktime(0, 0, 0, 7, 1, 2012),'birthCity'=>'البرز','countryId'=>'00644823158'],
        ['firstName'=>'زهرا','lastName'=>'شباهنگ','fatherName'=>'ماجد','date'=>mktime(0, 0, 0, 7, 1, 1990),'birthCity'=>'ایلام','countryId'=>'00214812342'],
        ['firstName'=>'فاطمه','lastName'=>'اعلایی','fatherName'=>'وحید','date'=>mktime(0, 0, 0, 7, 1, 1991),'birthCity'=>'تهران','countryId'=>'00241253245'],
        ['firstName'=>'شاهین','lastName'=>'کاظمی','fatherName'=>'حمید','date'=>mktime(0, 0, 0, 7, 1, 1992),'birthCity'=>'اهواز','countryId'=>'00644214134'], ['firstName'=>'علی','lastName'=>'مستوفی','fatherName'=>'عبداله','date'=>mktime(0, 0, 0, 7, 1, 2010),'birthCity'=>'تهران','countryId'=>'00644812453'],
        ['firstName'=>'سعید','lastName'=>'بی غم','fatherName'=>'فردوس','date'=>mktime(0, 0, 0, 7, 1, 2012),'birthCity'=>'البرز','countryId'=>'00644823158'],
        ['firstName'=>'زهرا','lastName'=>'شباهنگ','fatherName'=>'ماجد','date'=>mktime(0, 0, 0, 7, 1, 1990),'birthCity'=>'ایلام','countryId'=>'00214812342'],
        ['firstName'=>'فاطمه','lastName'=>'اعلایی','fatherName'=>'وحید','date'=>mktime(0, 0, 0, 7, 1, 1991),'birthCity'=>'تهران','countryId'=>'00241253245'],
        ['firstName'=>'شاهین','lastName'=>'کاظمی','fatherName'=>'حمید','date'=>mktime(0, 0, 0, 7, 1, 1992),'birthCity'=>'اهواز','countryId'=>'00644214134'],
    ],true);
});