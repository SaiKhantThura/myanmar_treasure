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
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function(){
	return view('contact');
});
Route::get('/blog', function(){
	return view('blog');
});
Route::get('/single_blog', function(){
	return view('single_blog');
});
Route::get('/shop', function(){
	return view('shop');
});
Route::get('/product-single', function(){
	return view('product-single');
});
Route::get('/cart', function(){
	return view('cart');
});
Route::get('/checkout', function(){
	return view('checkout');
});


Auth::routes();

Route::group(['middleware' => ['role:admin']], function () {
	Route::get('/home', 'HomeController@index')->name('home');
	
	Route::resource('categories', 'CategoryController');
	Route::resource('products', 'ProductController');
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

