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

Route::get('/', 'MainController@index');

Route::post('login', 'LoginController@postLogin');
Route::post('register', 'LoginController@postRegister');
Route::get('logout', 'LoginController@getLogout');

Route::get('contact', 'MainController@getContact');
Route::get('shop', 'MainController@getShop');
Route::get('products/{id?}', 'MainController@getProducts');
Route::get('cart', 'MainController@getCart');
Route::get('bag/{id?}', 'MainController@getAddToCart');
Route::get('remove-from-cart', 'MainController@getRemoveFromCart');
Route::get('checkout', 'MainController@getCheckout');
Route::post('checkout', 'MainController@postCheckout');
Route::post('search', 'MainController@postSearch');
Route::get('a-p', 'MainController@getAddProduct');
Route::post('a-p', 'MainController@postAddProduct');