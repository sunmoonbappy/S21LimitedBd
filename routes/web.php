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

Route::get('/', function () {
    return view('front-end.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// front-end
Route::get("/about","FrontEndAboutController@about");
Route::get("/contact","FrontEndAboutController@contact");
Route::get("/mission","FrontEndAboutController@mission");
Route::get("/product","FrontEndAboutController@product");
Route::get("/product-details","FrontEndAboutController@products_details");
Route::get("/gallery","FrontEndAboutController@gallery");
Route::get("/brand","FrontEndAboutController@brand");
Route::get("/testimonial","FrontEndAboutController@testimonial");
Route::get("/all-photos","FrontEndAboutController@all_photos");

// admin section
Route::get('/dashboard','DashboardController@index');
Route::get('/about-us',"AboutController@index");
