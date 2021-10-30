<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;



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
//Basic Routes
Route::get('/', [PagesController::class,'home'])->name('home');


//product routes
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/create',[ProductController::class,'createSubmit'])->name('product.create');
Route::get('/product/list',[ProductController::class,'list'])->name('product.list');
Route::get('/product/edit/{id}/{name}',[ProductController::class,'edit']);
Route::post('/product/edit',[ProductController::class,'editSubmit'])->name('product.edit');
Route::get('/product/delete/{id}/{name}',[ProductController::class,'delete']);

//order routes
Route::get('/order/create',[OrderController::class,'create'])->name('order.create');
Route::post('/order/create',[OrderController::class,'createSubmit'])->name('order.create');
Route::get('/order/list',[OrderController::class,'list'])->name('order.list');
Route::get('/order/edit/{id}/{name}',[OrderController::class,'edit']);
Route::post('/order/edit',[OrderController::class,'editSubmit'])->name('order.edit');
Route::get('/order/delete/{id}/{name}',[OrderController::class,'delete']);

//delivery routes
Route::get('/delivery/create',[DeliveryController::class,'create'])->name('delivery.create');
Route::post('/delivery/create',[DeliveryController::class,'createSubmit'])->name('delivery.create');
Route::get('/delivery/list',[DeliveryController::class,'list'])->name('delivery.list');
Route::get('/delivery/edit/{id}/{name}',[DeliveryController::class,'edit']);
Route::post('/deliverycon/edit',[DeliveryController::class,'editSubmit'])->name('delivery.edit');
Route::get('/deliverycon/delete/{id}/{name}',[DeliveryController::class,'delete']);


//admin routes
Route::get('/admin/create',[AdminController::class,'create'])->name('admin.create');
Route::post('/admin/create',[AdminController::class,'createSubmit'])->name('admin.create');
Route::get('/admin/list',[AdminController::class,'list'])->name('admin.list');
Route::get('/admin/edit/{id}/{name}',[AdminController::class,'edit']);
Route::post('/admin/edit',[AdminController::class,'editSubmit'])->name('admin.edit');
Route::get('/admin/delete/{id}/{name}',[AdminController::class,'delete']);
//User routes
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::post('/user/create',[UserController::class,'createSubmit'])->name('user.create');
Route::get('/user/list',[UserController::class,'list'])->name('user.list');

//user details
Route::get('/user/details',[AdminController::class,'userDetails'])->name('user.details');




Route::get('/registration', [Admincontroller::class, 'registrationPage'])->name('registration');
Route::post('/registration', [Admincontroller::class, 'registrationSubmit'])->name('registration');

//login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//Admin dash
Route::get('/user/dash', [PagesController::class,'userdash'])->name('userdash')->middleware('ValidUser');