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

Route::get('/', 'HomeController@index');
Route::get('/crux/', 'HomeController@crux');
Route::get('/contact/', 'HomeController@contact');
Route::get('/contact/sent/', 'HomeController@contact_sent');
Route::get('/distractions/', 'HomeController@distractions');
Route::post('/email', 'MailController@email');
Route::get('/museum/', 'HomeController@museum');
