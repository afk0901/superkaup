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

Route::get('/','ProductController@index');

Route::get('/product/{product}','ProductController@showproduct');

Route::get('/in_basket','ProductController@in_basket');


Route::get('/order', 'OrderController@store');




Route::get('/delete_from_basket','ProductController@delete_from_basket');

Route::get('/orders','OrderController@index');

Route::get('/checkout','ProductController@user_checkout');

Auth::routes();

Route::get('/home', 'HomeController@index');
