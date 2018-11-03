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

Route::get("/", "WelcomeController@index");

Route::post("/add-to-cart", "CartController@AddToCart");
Route::get("/checkout", "CartController@Checkout");



//route::get("/", "BaseController@index");
//route::get("/about-us", "BaseController@about_us");
//route::get("/gallery", "BaseController@gallery");

//    product controller start here

$arr = [
    "product-management" => "ProductController",
//    "category-management" => "CategoryController"
];
foreach($arr as $key => $value){
route::get("/$key", "$value@index");
route::get("/$key/create", "$value@create");
route::post("/$key", "$value@store");
route::get("/$key/edit/{id}", "$value@edit");
route::post("/$key/update", "$value@update");
route::get("/$key/delete/{id}", "$value@destroy");
}
//    product controller end here
//==================== Auth Controller Start ==========================
Auth::routes();
Route::get("dashboard", "HomeController@index")->name("dashboard");
Route::get('change-password','PasswordController@index')->name('password.change');
Route::post('change-password','PasswordController@updatepsaaword')->name('password.change');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
//==================== Auth Controller  End ==========================

Route::get("/{slag1}/{slag2}", "WelcomeController@category");
Route::get("/{slag1}/{slag2}/{slag3}", "WelcomeController@subcategory");
Route::get("/{slag1}/{slag2}/{slag3}/{slag4}", "WelcomeController@details");