<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//user
Route::post('/register', 'App\Http\Controllers\UserAdminController@store');
Route::post('/login', 'App\Http\Controllers\UserAdminController@login');

//products
Route::prefix('products')->group(function () {
    Route::post('/', 'App\Http\Controllers\ProductController@store');
    Route::get('/', 'App\Http\Controllers\ProductController@getAll');
    Route::put('/{productId}/categories', 'App\Http\Controllers\ProductController@updateType');
    Route::post('/images', 'App\Http\Controllers\ProductImageController@saveImage');
});

//categories
Route::prefix('categories')->group(function () {
    Route::post('/', 'App\Http\Controllers\CategoryController@store');
});

//customer
Route::prefix('customers')->group(function () {
    Route::get('/', 'App\Http\Controllers\CustomerController@getAll');
    Route::get('/{id}', 'App\Http\Controllers\CustomerController@getById');
    Route::post('/', 'App\Http\Controllers\CustomerController@store');
});