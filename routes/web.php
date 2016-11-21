<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'PagesController@about');

Route::get('cards', 'PagesController@cards');

Route::get('link', function () {
   return view('pages/link'); 
});

/*
Route::get('names', function () {
    $names = ['Frutos Secos','Cejas','Nurse'];
   return view('pages/names', compact('names')); 
});
 *
 */

Route::get('chapala', 'PagesController@home');

Route::get('contacto', 'PagesController@contact');

Route::get('tenants', 'TenantsController@index'); 

Route::get('tenants/{tenant}', 'TenantsController@detail'); 

Route::get('admin/tenants', 'TenantsController@index'); 

Route::get('admin/tenants/{id}', 'TenantsController@detail'); 

Route::get('admin/data_tenants', 'TenantsController@tenants'); 


