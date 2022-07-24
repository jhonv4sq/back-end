<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\RecordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(ProductController::class)->group(function(){
    Route::get('/products', 'index')->name('products');
    Route::get('/products/{id}', 'show')->name('products.show');
    Route::get('/products/{id}/buy', 'buy')->name('products.buy');
    Route::get('/products/{id}/refund', 'refund')->name('products.refund');
});

Route::controller(RecordController::class)->group(function(){
    Route::get('records', 'index')->name('records');
});

