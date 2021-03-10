<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth.jwt')->group(function() {
    Route::get('orders/searchId', [OrderController::class, 'searchById']);
    Route::get('orders/searchDate', [OrderController::class, 'searchByDeliveryDate']);
    Route::apiResource('products', App\Http\Controllers\ProductController::class)->only(['index']);
    Route::apiResource('orders', OrderController::class)->except(['create', 'show', 'update', 'delete']);
    Route::apiResource('suppliers', App\Http\Controllers\SupplierController::class)->only(['index']);
});

Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::middleware('auth.jwt')->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    });
});
