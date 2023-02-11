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
Route::post('/product-checkout/confirm', [App\Http\Controllers\OrderController::class,'confirm']);
Route::get('/product-checkout/{product:id}', [App\Http\Controllers\OrderController::class,'checkout']);


Route::get('/', [App\Http\Controllers\HomeController::class,'index']);
Route::get('/product-details/{product:id}', [App\Http\Controllers\ProductController::class,'index']);
Route::get('/account-login', function () {return view('login');});
Route::get('/my-account', function () {return view('my-account');});
Route::get('/contact', function () {return view('contact');});
Route::post('/contact', [App\Http\Controllers\ContactController::class,'save']);
Route::get('/faq', function () {return view('faq');});
Route::get('/privacy-policy', function () {return view('privacy-policy');});
Route::get('/about-us', function () {return view('about');});
Route::get('/product-cart', function () {return view('product-cart');});
Route::get('/my-order-details', function () {return view('my-order-details');});

// Admin
Route::get("/login",[App\Http\Controllers\AuthController::class,'getLogin']);
Route::get("/forgot-password",[App\Http\Controllers\AuthController::class,'getForgotPassword']);
Route::get("/reset-password",[App\Http\Controllers\AuthController::class,'getResetPassword']);
