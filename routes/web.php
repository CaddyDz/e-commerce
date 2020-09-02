<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ProductsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/cart/add/{product}', 'CartController@add')->name('cart.add');
Route::post('/cart/remove/{product}', 'CartController@remove')->name('cart.remove');
Route::get('/products/{product}', 'ProductsController@show')->name('product');
Route::get('/brands/{brand}', 'BrandsController@show')->name('brand');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/checkout', 'CheckoutController@index');
Route::view('about', 'about');
Route::view('tos', 'tos');
Route::view('faq', 'faq');
