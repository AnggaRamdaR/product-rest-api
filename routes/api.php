<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::post('/product',[ProductController::class,'store']);
Route::get('/product',[ProductController::class,'showAll']);
Route::put('/product/{id}',[ProductController::class,'update']);
Route::delete('/product/{id}',[ProductController::class,'delete']);
Route::get('/product/{id}',[ProductController::class,'showByID']);
Route::get('/product/search/product_name={product_name}',[ProductController::class,'showByName']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
