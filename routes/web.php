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
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductsController@products')->name('products');
Route::get('product-detail/{id}', 'ProductsController@detail');
Route::get('/cart', 'ProductsController@cart');
Route::get('/pagar', 'ProductsController@pagar');
Route::get('/borrar', 'ProductsController@emptycart');
Route::get('borrar-producto/{id}', 'ProductsController@deleteProduct');
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');


