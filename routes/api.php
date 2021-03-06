<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products/list/{page}', 'App\Http\Controllers\API\ProductController@list');
Route::delete('products/{product}', 'App\Http\Controllers\API\ProductController@destroy');

Route::post('products/', 'App\Http\Controllers\API\ProductController@store');


Route::get('/products/{product}/edit', 'App\Http\Controllers\API\ProductController@edit');
Route::put('products/{product}', 'App\Http\Controllers\API\ProductController@update');

Route::post('products/upload', 'App\Http\Controllers\API\ProductController@upload');

// remove uploaded images when cancel button pushed
Route::post('products/remove', 'App\Http\Controllers\API\ProductController@remove');