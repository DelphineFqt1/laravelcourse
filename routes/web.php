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
})->name('welcome');

/* Route::get('/index', 'App\Http\Controllers\HomeController@index')->name("home.index");
 */ 
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name("home.contact");

Route::get('/product/show/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

Route::get('/product/create', 'App\Http\Controllers\ProductController@create')->name("product.create");

Route::post('/product/save', 'App\Http\Controllers\ProductController@save')->name("product.save");

Route::get('/image/index', 'ImageController@index')->name("image.index");

Route::post('/image/save', 'ImageController@save')->name("image.save");

Route::get('/trombi', 'App\Http\Controllers\TrombiController@trombi')->name("trombi.trombi");

Route::get('/admin', 'App\Http\Controllers\AdminsController@admins')->name("admin.admin");

Route::get('/admin/profil/{id}', 'App\Http\Controllers\AdminsController@profil')->name("admin.profil");

/* Route::middleware(['auth:sanctum', 'verified'])->get('/index', function () {
    return view('home.index');
})->name('home.index');  */


Route::get('/log', 'App\Http\Controllers\AuthController@login')->name("auth.login");

Route::get('/reg', 'App\Http\Controllers\AuthController@register')->name("auth.register");

Route::get('/produits', 'App\Http\Controllers\ProduitsController@produits')->name("produits.produits");

Route::get('/actus', 'App\Http\Controllers\ActusController@actus')->name("actus.actus");

Route::get('/consommations', 'App\Http\Controllers\ProduitsController@consommations')->name("produits.consommations");

Route::get('produits/sodas', 'App\Http\Controllers\ProduitsController@sodas')->name("produits.sodas");
Route::get('produits/alcools', 'App\Http\Controllers\ProduitsController@alcools')->name("produits.alcools");
Route::get('produits/nourriture', 'App\Http\Controllers\ProduitsController@nourriture')->name("produits.nourriture");

require_once __DIR__ . '/jetstream.php';