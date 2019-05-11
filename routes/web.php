<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/kedelai', 'HomeController@kedelai')->name('kedelai');
Route::get('/ragi', 'HomeController@ragi')->name('ragi');
Route::get('/loginn', 'HomeController@login')->name('loginn');
Route::post('/doLogin', 'HomeController@doLogin')->name('doLogin');
Route::get('/daftarr', 'HomeController@daftar')->name('daftar');
Route::post('/prosesDaftar', 'HomeController@prosesDaftar')->name('prosesDaftar');
Route::post('/search', 'HomeController@search')->name('search');

//setelah login
Route::get('/dashboard', 'HomeController@index_setelah_login')->name('dashboard');
Route::get('/shopp', 'HomeController@shop_setelah_login')->name('shopp');
Route::get('/kedelaii', 'HomeController@kedelai_setelah_login')->name('kedelaii');
Route::get('/ragii', 'HomeController@ragi_setelah_login')->name('ragii');
Route::post('/searchh', 'HomeController@search_setelah_login')->name('searchh');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/keranjang', 'cartController@cart')->name('cart');
Route::get('/add_cart/{id}', 'cartController@add_cart')->name('add_cart');


Auth::routes();
Route::group(['prefix'=>'admin','middleware'=>['auth', 'admin']], function (){

	Route::get('/', function () {
    return view('admin.index');
});
	Route::resource('product','ProductController');
	Route::resource('category', 'CategoriesController');

});
