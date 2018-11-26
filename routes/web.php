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

Route::get('/', 'PagesController@root')->name('root');

Auth::routes();

Route::get("/services", "ProductsController@index")->name("services");
Route::get("/about", "PagesController@about")->name("about");
Route::get("/opening", "PagesController@opening")->name("opening");
Route::get("/contact", "PagesController@contact")->name("contact");
Route::get("/articles", "ArticlesController@index")->name("articles.index");
Route::get("/articles/{product}", "ArticlesController@category")->name("articles.category");
Route::get("/articles/{product}/{article}/{slug?}", "ArticlesController@show")->name("articles.show");
