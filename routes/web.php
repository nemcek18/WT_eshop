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

//Route::get('/cart_add/{id}', 'App\Http\Controllers\ProductController@addToCart');

// search
Route::get('/search','App\Http\Controllers\SearchController@index')->name('search');
Route::get('/search/{query}/{direction}',['uses'=>'App\Http\Controllers\SearchController@sort']);

Route::get('/cart_add/{id}', 'App\Http\Controllers\ProductController@addToCart');
Route::get('/remove_cart/{id}', 'App\Http\Controllers\ProductController@removeCart');
Route::get('/update_cart/{id}/{quantity}', 'App\Http\Controllers\ProductController@updateCart');
Route::post('/basket/delivery_payment', 'App\Http\Controllers\BasketController@get_delivery_payment');
Route::post('/basket/delivery_data', 'App\Http\Controllers\OrderController@create');

Auth::routes();

Route::get('/basket', 'App\Http\Controllers\BasketController@index');
Route::get('/basket/delivery_payment', 'App\Http\Controllers\BasketController@delivery_payment');
Route::get('/basket/delivery_data', 'App\Http\Controllers\BasketController@delivery_data');

// Route::get('/{category}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/category/{category}/{id}',['uses' => 'App\Http\Controllers\ProductController@show'])->where('id','[0-9]+');

Route::get('/category/{category}', 'App\Http\Controllers\ProductController@index')->name('products.index');
Route::get('/search', 'App\Http\Controllers\SearchController@index')->name('search.index');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'App\Http\Controllers\HomeController@index');