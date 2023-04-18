<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\ProductsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\ProductsController@productList')->name('products.list');
Route::get('cart', 'App\Http\Controllers\CartsController@cartList')->name('cart.list');
Route::post('cart', 'App\Http\Controllers\CartsController@addToCart')->name('cart.store');
Route::post('update-cart', 'App\Http\Controllers\CartsController@updateCart')->name('cart.update');
Route::post('remove', 'App\Http\Controllers\CartsController@removeCart')->name('cart.remove');
Route::post('clear', 'App\Http\Controllers\CartsController@clearAllCart')->name('cart.clear');