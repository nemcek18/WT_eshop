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

// search
Route::get('/search','App\Http\Controllers\SearchController@index')->name('search');
Route::get('/search/{query}/{direction}',['uses'=>'App\Http\Controllers\SearchController@sort']);

Route::get('/{category}',['uses' => 'App\Http\Controllers\ProductController@show_category']);
Route::get('/{category}/{id}',['uses' => 'App\Http\Controllers\ProductController@show'])->where('id','[0-9]+');
Route::get('/{category}/{desc}',['uses' => 'App\Http\Controllers\ProductController@sort']);
Route::get('/{category}/{asc}',['uses' => 'App\Http\Controllers\ProductController@sort']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', 'App\Http\Controllers\HomeController@index');