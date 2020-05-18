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

Route::get('/', 'FrontendController@index');
Route::get('about', 'FrontendController@about');
Route::get('contact', 'FrontendController@contact');

Route::get('blog', 'FrontendController@blog');

Route::get('/single_blog/{blog}','FrontendController@singleBlog')->name('single_blog');
Route::get('shop', 'FrontendController@shop');
Route::get('product-single/{product}', 'FrontendController@productSingle');
Route::get('cart', 'FrontendController@cart');
Route::get('checkout', 'FrontendController@checkout');
Route::get('categories/all', 'FrontendController@getAllCategories');
Route::get('/shop-products/{product}', 'FrontendController@getProductsDetails');
Route::get('/shop-products', 'FrontendController@getProducts');

Route::resource('orders', 'OrderController');

Route:: get('/receipt','FrontendController@receipt');
Route:: get('/wishlist', function(){
	return view('wishlist');
});

Auth::routes();

Route::group(['middleware' => ['role:admin']], function () {
	Route::get('/home', 'HomeController@index')->name('home');
	
	Route::resource('categories', 'CategoryController');
	Route::resource('products', 'ProductController');
	Route::resource('blogcaregories', 'BlogCategoryController');
	Route::resource('blogs', 'BlogController');
	
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

