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

Route::get('/cart_add/{id}', 'App\Http\Controllers\ProductController@addToCart');
Route::get('/remove_cart/{id}', 'App\Http\Controllers\ProductController@removeCart');
Route::get('/update_cart/{id}', 'App\Http\Controllers\ProductController@updateCart');

Auth::routes();

Route::get('/basket', 'App\Http\Controllers\BasketController@index');
Route::get('/basket/delivery&payment', 'App\Http\Controllers\BasketController@delivery_payment');
Route::get('/basket/delivery_data', 'App\Http\Controllers\BasketController@delivery_data');

Route::get('/{category}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/{category}/{id}',['uses' => 'App\Http\Controllers\ProductController@show'])->where('id','[0-9]+');
Route::get('/{category}/{desc}',['uses' => 'App\Http\Controllers\ProductController@sort']);
Route::get('/{category}/{asc}',['uses' => 'App\Http\Controllers\ProductController@sort']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'App\Http\Controllers\HomeController@index');