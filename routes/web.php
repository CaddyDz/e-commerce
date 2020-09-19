<?php

declare(strict_types=1);

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

Auth::routes(['reset' => false, 'verify' => false]);

Route::get('home', 'HomeController@index')->name('home');

Route::prefix('cart')->name('cart')->group(function () {
	Route::get('/', 'CartController@index');
	Route::post('add/{product}', 'CartController@add')->name('.add');
	Route::post('update', 'CartController@update')->name('.update');
	Route::post('remove/{product}', 'CartController@remove')->name('.remove');
});
Route::get('products/{product}', 'ProductsController@show')->name('product');
Route::get('brands/{brand}', 'BrandsController@show')->name('brand');
Route::get('categories/{category}', 'CategoriesController@show')->name('category');
Route::get('checkout', 'CheckoutController@index');
Route::view('about', 'about');
Route::view('tos', 'tos');
Route::view('faq', 'faq');
Route::get('shipping', 'ShippingController@index');
Route::post('order', 'CheckoutController@store');
Route::get('print/order/{order}', 'OrdersController@print');
