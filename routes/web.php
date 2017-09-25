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

Route::get('/', 'TemplatesController@showIndex')->name('templates.index');
Route::get('/template/{slug}', 'TemplatesController@index')->name('templates.show');
Route::get('/demos/{slug}', 'TemplatesController@show')->name('demos.show');
Route::get('/buy/{slug}', 'CheckoutController@show')->name('checkout.show');

Route::get('/pages/about', 'PagesController@about')->name('pages.about');
Route::get('/pages/ask-for-a-template', 'PagesController@askForTemplate')->name('pages.askForTemplate');
Route::get('/pages/contact', 'PagesController@contact')->name('pages.contact');

