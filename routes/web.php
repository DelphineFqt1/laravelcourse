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

Route::get('/trombi', 'App\Http\Controllers\TrombiController@trombi')->name("trombi.trombi");

Route::get('/admin', 'App\Http\Controllers\AdminsController@admins')->name("admin.admin");

Route::get('/produits/create', 'App\Http\Controllers\ProduitsController@create')->name("produits.create");
Route::post('/produits/save', 'App\Http\Controllers\ProduitsController@save')->name("produits.save");

Route::get('/admin/profil/{id}', 'App\Http\Controllers\AdminsController@profil')->name("admin.profil");

Route::get('makeAdmin/{id}', 'App\Http\Controllers\AdminsController@makeAdmin')->name("admin.makeAdmin");
Route::get('makeMember/{id}', 'App\Http\Controllers\AdminsController@makeMember')->name("admin.makeMember");

Route::get('/log', 'App\Http\Controllers\AuthController@login')->name("auth.login");

Route::get('/reg', 'App\Http\Controllers\AuthController@register')->name("auth.register");

Route::get('/produits', 'App\Http\Controllers\ProduitsController@produits')->name("produits.produits");

Route::get('/posts', 'App\Http\Controllers\PostsController@posts')->name("posts.posts");
Route::get('/posts/create', 'App\Http\Controllers\PostsController@create')->name("posts.create");
Route::post('/posts/save', 'App\Http\Controllers\PostsController@save')->name("posts.save");
Route::post('/posts/delete', 'App\Http\Controllers\PostsController@delete')->name("posts.delete");

Route::get('/consommations', 'App\Http\Controllers\ProduitsController@consommations')->name("produits.consommations");

Route::get('sodas', 'App\Http\Controllers\ProduitsController@sodas')->name("produits.sodas");
Route::get('alcools', 'App\Http\Controllers\ProduitsController@alcools')->name("produits.alcools");
Route::get('nourriture', 'App\Http\Controllers\ProduitsController@nourriture')->name("produits.nourriture");

require_once __DIR__ . '/jetstream.php';