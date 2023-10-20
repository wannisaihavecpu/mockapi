<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompareController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CouponController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('compare', 'CompareController@index');
Route::get('compare', [CompareController::class, 'index']);
Route::get('productlist', [CompareController::class, 'productList']);
Route::get('address', [AddressController::class, 'index']);
Route::get('shippinglist', [PaymentController::class, 'productList']);
Route::post('collectCoupon', [CouponController::class, 'collectCoupon']);
Route::post('myCouponAvaliable', [CouponController::class, 'myCouponAvaliable']);