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

/*Route::get('/', function () {
	return view('home');
});*/


Route::get('/{tablets}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/{tablets}/{asc}',['uses' => 'App\Http\Controllers\ProductController@sort']);
Route::get('/{tablets}/{desc}',['uses' => 'App\Http\Controllers\ProductController@sort']);

Route::get('/{mobiles}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/{mobiles}/{asc}',['uses' => 'App\Http\Controllers\ProductController@sort']);
Route::get('/{mobiles}/{desc}',['uses' => 'App\Http\Controllers\ProductController@sort']);

Route::get('/{watches}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/{watches}/{asc}',['uses' => 'App\Http\Controllers\ProductController@sort']);
Route::get('/{watches}/{desc}',['uses' => 'App\Http\Controllers\ProductController@sort']);

Route::get('/{televisions}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/{computers}/{asc}',['uses' => 'App\Http\Controllers\ProductController@sort']);
Route::get('/{televisions}/{desc}',['uses' => 'App\Http\Controllers\ProductController@sort']);


Route::get('/{computers}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/{computers}/{asc}',['uses' => 'App\Http\Controllers\ProductController@sort']);
Route::get('/{computers}/{desc}',['uses' => 'App\Http\Controllers\ProductController@sort']);

Route::get('/{laptops}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/{laptops}/{asc}',['uses' => 'App\Http\Controllers\ProductController@sort']);
Route::get('/{laptops}/{desc}',['uses' => 'App\Http\Controllers\ProductController@sort']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', 'App\Http\Controllers\HomeController@index');