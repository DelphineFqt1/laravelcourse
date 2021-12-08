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

Route::get('/index', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name("home.contact");

Route::get('/product/show/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

Route::get('/product/create', 'App\Http\Controllers\ProductController@create')->name("product.create");

Route::post('/product/save', 'App\Http\Controllers\ProductController@save')->name("product.save");

Route::get('/image/index', 'ImageController@index')->name("image.index");

Route::post('/image/save', 'ImageController@save')->name("image.save");

Route::get('/trombi', 'App\Http\Controllers\TrombiController@trombi')->name("trombi.trombi");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/log', 'App\Http\Controllers\AuthController@login')->name("auth.login");

Route::get('/reg', 'App\Http\Controllers\AuthController@register')->name("auth.register");

Route::get('/produits', 'App\Http\Controllers\ProduitsController@produits')->name("produits.produits");

Route::get('/actus', 'App\Http\Controllers\ActusController@actus')->name("actus.actus");
