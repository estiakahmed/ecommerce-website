<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class,'index']);
Route::get('/product/details',[HomeController::class,'productDetails']);
Route::get('/product/view-cart',[HomeController::class,'productView']);
Route::get('/product/checkout',[HomeController::class,'checkOut']);
Route::get('/shop-products',[HomeController::class,'productShop']);
Route::get('/return-process',[HomeController::class,'returnProcess']);
Route::get('/privacy-policy',[HomeController::class,'privacyPolicy']);
