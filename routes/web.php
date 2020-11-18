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

Route::get('/', function () {
	return view('home');
});


Route::get('/{tablets}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/{mobiles}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/{watches}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/{televisions}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/{computers}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/{laptops}',['uses' => 'App\Http\Controllers\ProductController@show_category']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
