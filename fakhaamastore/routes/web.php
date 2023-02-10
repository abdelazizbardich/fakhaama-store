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


Route::get('/shop', [App\Http\Controllers\ShopController::class,'index']);
Route::post('/newsletter', [App\Http\Controllers\NewsletterController::class,'create']);
Route::post('/reviews', [App\Http\Controllers\ReviewController::class,'save']);


Route::get('/', [App\Http\Controllers\HomeController::class,'index']);
Route::get('/product-details/{product:id}', [App\Http\Controllers\ProductController::class,'index']);
Route::get('/account-login', function () {return view('login');});
Route::get('/my-account', function () {return view('my-account');});
Route::get('/contact', function () {return view('contact');});
Route::get('/faq', function () {return view('faq');});
Route::get('/product-cart', function () {return view('product-cart');});
Route::get('/my-order-details', function () {return view('my-order-details');});
Route::get('/product-checkout', function () {return view('product-checkout');});
