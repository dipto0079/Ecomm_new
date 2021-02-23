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

//Frontend Route..............
Route::get('/', 'App\Http\Controllers\HomeController@index');

//Show Category
Route::get('/product_by_category/{category_id}', 'App\Http\Controllers\HomeController@show_product_by_category');
Route::get('/product_by_manufacture/{manufacture_id}', 'App\Http\Controllers\HomeController@show_product_by_manufacture');
Route::get('/view_product/{products_id}', 'App\Http\Controllers\HomeController@product_details_by_id');
Route::post('/add-to-cart', 'App\Http\Controllers\CartController@add_to_cart');
Route::get('/show-cart', 'App\Http\Controllers\CartController@show_cart');



//Admin Route............
Route::get('/logout', 'App\Http\Controllers\SuperAdminController@logout');
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\SuperAdminController@index');
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');

//Category Route...........
Route::get('/add-category', 'App\Http\Controllers\CategoryController@index');
Route::get('/all-category', 'App\Http\Controllers\CategoryController@all_category');
Route::post('/save-category', 'App\Http\Controllers\CategoryController@save_category');
Route::get('/unactive_category/{category_id}', 'App\Http\Controllers\CategoryController@unactive_category');
Route::get('/active_category/{category_id}', 'App\Http\Controllers\CategoryController@active_category');
Route::get('/edit_category/{category_id}', 'App\Http\Controllers\CategoryController@edit_category');
Route::post('/update_category/{category_id}', 'App\Http\Controllers\CategoryController@update_category');
Route::get('/delete_category/{category_id}', 'App\Http\Controllers\CategoryController@delete_category');

//Manufacture Route...
Route::get('/add-manufacture', 'App\Http\Controllers\ManufactureController@index');
Route::post('/save-manufacture', 'App\Http\Controllers\ManufactureController@save_manufacture');
Route::get('/all-manufacture', 'App\Http\Controllers\ManufactureController@all_manufacture');
Route::get('/delete_manufacture/{manufacture_id}', 'App\Http\Controllers\ManufactureController@delete_manufacture');
Route::get('/unactive_manufacture/{manufacture_id}', 'App\Http\Controllers\ManufactureController@unactive_manufacture');
Route::get('/active_manufacture/{manufacture_id}', 'App\Http\Controllers\ManufactureController@active_manufacture');
Route::get('/edit_manufacture/{manufacture_id}', 'App\Http\Controllers\ManufactureController@edit_manufacture');
Route::post('/update-manufacture/{manufacture_id}', 'App\Http\Controllers\ManufactureController@update_manufacture');

//Products Route..............
Route::get('/add-products', 'App\Http\Controllers\ProductController@index');
Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product');
Route::get('/all-product', 'App\Http\Controllers\ProductController@all_product');
Route::get('/unactive_product/{products_id}', 'App\Http\Controllers\ProductController@unactive_product');
Route::get('/active_product/{products_id}', 'App\Http\Controllers\ProductController@active_product');
Route::get('/delete_product/{products_id}', 'App\Http\Controllers\ProductController@delete_product');

//Slider Route..............
Route::get('/add-slider', 'App\Http\Controllers\SliderController@index');
Route::post('/save-slider', 'App\Http\Controllers\SliderController@save_slider');
Route::get('/all-slider', 'App\Http\Controllers\SliderController@all_slider');
Route::get('/unactive_slider/{slider_id}', 'App\Http\Controllers\SliderController@unactive_slider');
Route::get('/active_slider/{slider_id}', 'App\Http\Controllers\SliderController@active_slider');
Route::get('/delete_slider/{slider_id}', 'App\Http\Controllers\SliderController@delete_slider');
