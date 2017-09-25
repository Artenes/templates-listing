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
Route::get('/demos/{slug}', 'TemplatesController@demo')->name('demos.show');
Route::get('/buy/{slug}', 'CheckoutController@show')->name('checkout.show');
Route::get('/bought/{slug}', 'CheckoutController@store')->name('checkout.store');

Route::get('/pages/about', 'PagesController@about')->name('pages.about');
Route::get('/pages/request-a-template', 'PagesController@requestATemplate')->name('pages.requestATemplate');
Route::get('/pages/contact', 'PagesController@contact')->name('pages.contact');
Route::get('/pages/terms', 'PagesController@terms')->name('pages.terms');

Route::post('request', 'RequestController@store')->name('request.store');
Route::post('contact', 'ContactController@store')->name('contact.store');
