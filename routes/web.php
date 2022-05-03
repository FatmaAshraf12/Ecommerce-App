<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Order;

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

Route::get('/login', function () {
    return view('login');
});


Route::view('/register','register');
Route::post('/register', [UserController::class,'register']);

Route::post('/login', [UserController::class,'login']);
Route::get('/', [ProductController::class,'index']);
Route::get('/detail/{id}', [ProductController::class,'detail']);
Route::post('/add_to_cart', [ProductController::class,'addToCart']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});


Route::get('/cart', [ProductController::class,'cartList']);
Route::get('/remove/{id}', [ProductController::class,'removeItem']);
Route::get('/checkout', [ProductController::class,'createOrder']);
Route::post('/orderplace',[ProductController::class,'xx']);


Route::get('/orders', [ProductController::class,'ordersList']);
