<?php

use App\Http\Controllers\ProductController;
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

// Route::get('products',[ProductController::class,'index']);

// Route::get('product/{id}',[ProductController::class,'show']);
// Route::post('products',[ProductController::class,'store']);
// Route::put('product/{id}',[ProductController::class,'update']);
// Route::delete('product/{id}',[ProductController::class,'destroy']);
Route::apiResource('products',ProductController::class);
Route::get('user',[\App\Http\Controllers\UserController::class,'random']);
