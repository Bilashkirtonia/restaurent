<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


// HomeController
Route::get('/',[HomeController::class,"index"]);
Route::get('/redirects',[HomeController::class,"redirect"]);
Route::get('/cart/{id}',[HomeController::class,"cart"]);
Route::post('/order_cart/{id}',[HomeController::class,"order_cart"]);
Route::get('/showCartFood/{id}',[HomeController::class,"showcard"]);
Route::get('/deletefood1/{id}',[HomeController::class,"deletefood1"]);
Route::post('/updateOrder',[HomeController::class,"updateOrder"]);

// AdminController
Route::get('/users',[AdminController::class,"users"]);
Route::get('/deleteUser/{id}',[AdminController::class,"deleteUser"]);
Route::get('/foodmenu',[AdminController::class,"foodmenu"]);
Route::post('/insertfood',[AdminController::class,"insertfood"]);
Route::get('/foodlist',[AdminController::class,"foodlist"]);
Route::get('/editfood/{id}',[AdminController::class,"editfood"]);
Route::get('/deletefood/{id}',[AdminController::class,"deletefood"]);
Route::post('/uploadfood/{id}',[AdminController::class,"uploadfood"]);
Route::post('/insertreservation',[AdminController::class,"insertreservation"]);
Route::get('/showreservation',[AdminController::class,"showreservation"]);
Route::get('/deletereservation/{id}',[AdminController::class,"deletereservation"]);
Route::get('/viewreservation/{id}',[AdminController::class,"viewreservation"]);
Route::get('/viewchef',[AdminController::class,"viewchef"]);
Route::post('/insertchef',[AdminController::class,"insertchef"]);
Route::get('/showchef',[AdminController::class,"showchef"]);
Route::get('/deletechef/{id}',[AdminController::class,"deletechef"]);
Route::get('/editchef/{id}',[AdminController::class,"editchef"]);
Route::post('/updatechef/{id}',[AdminController::class,"updatechef"]);
Route::get('/foodorder',[AdminController::class,"foodorder"]);
Route::get('/deleteOrder/{id}',[AdminController::class,"deleteOrder"]);
Route::get('/search',[AdminController::class,"search"]);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
