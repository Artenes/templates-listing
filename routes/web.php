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

Route::get('/', 'TemplatesController@index')->name('templates.index');
Route::get('/template/{slug}', 'TemplatesController@index')->name('templates.show');
Route::get('/demos/{slug}', 'TemplatesController@show')->name('demos.show');
Route::get('/bruy/{slug}', 'CheckoutController@show')->name('checkout.show');

