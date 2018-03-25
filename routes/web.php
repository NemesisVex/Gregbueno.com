<?php

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

Route::get('/', 'HomeController@index');
Route::get('/crux/', 'HomeController@crux');
Route::get('/contact/', 'HomeController@contact');
Route::get('/contact/sent/', 'HomeController@contact_sent');
Route::get('/distractions/', 'HomeController@distractions');
Route::post('/email', 'MailController@email');
Route::get('/museum/', 'HomeController@museum');