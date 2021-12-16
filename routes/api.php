<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllerAPI;
use App\Http\Controllers\AdminControllerAPI;
use App\Http\Controllers\DeliveryControllerAPI;
use App\Http\Controllers\OrderControllerAPI;
use App\Http\Controllers\ProductControllerAPI;
use App\Http\Controllers\OrderdetailControllerAPI;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//API test
Route::get('/admin/list',[AdminControllerAPI::class,'adminAPIList']);
Route::post('/admin/create',[AdminControllerAPI::class,'adminAPIPost']);


//API test
Route::get('/user/list',[UserControllerAPI::class,'userAPIList']);
Route::post('/user/create',[UserControllerAPI::class,'userAPIPost']);

//API test
Route::get('/product/list',[ProductControllerAPI::class,'productAPIList']);
Route::post('/product/create',[ProductControllerAPI::class,'productAPIPost']);

//API test
Route::get('/order/list',[OrderControllerAPI::class,'orderAPIList']);
Route::post('/order/create',[OrderControllerAPI::class,'orderAPIPost']);

//API test
Route::get('/orderdetail/list',[OrderdetailControllerAPI::class,'orderdetailAPIList']);
Route::post('/orderdetail/create',[OrderdetailControllerAPI::class,'orderdetailAPIPost']);


//API test
Route::get('/delivery/list',[DeliveryControllerAPI::class,'deliveryAPIList']);
Route::post('/delivery/create',[DeliveryControllerAPI::class,'deliveryAPIPost']);