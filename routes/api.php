<?php

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

Route::get('products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::post('products', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
Route::put('products/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');
Route::get('products/{id}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
