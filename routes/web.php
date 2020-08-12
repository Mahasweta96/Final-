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

Route::get('/new-login', function () {
    return view('auth/newLogin');
});

Route::get('/new-register', function () {
    return view('auth/newRegister');
});
Route::get('/logout','Auth\LoginController@logout');

Route::post('/cart','CartController@store');

Route::get('/cart/create','CartController@create');

Route::get('/cart/{cart}/edit','CartController@edit');

Route::put('/cart/{cart}','CartController@update');

Route::get('/cart','CartController@index');


Route::get('/cart', function () {
    return view('cart');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/type', function () {
    return view('type');
});    

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/mahi', function () {
    return view('mahi');
 });


//Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{shop}', 'ShopController@show')->name('shop.show');

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
 return view('front');
});

//Route::get('/', function () {
// return view('goodie');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')
    ->middleware('auth');
