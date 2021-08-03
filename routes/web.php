<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToiletPaper;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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

Route::get('/', [ToiletPaper::class, 'index'])->name('index');
Route::get('/contact', [ToiletPaper::class, 'contact']);
Route::get('/about', [ToiletPaper::class, 'about']);
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sessions', [SessionsController::class, 'store']);
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::get('/products', [ProductsController::class, 'show']);
Route::get('products/{id}', [ProductsController::class, 'showOneProduct'])->name('single-product');
Route::post('add_to_cart', [ProductsController::class, 'addToCart'])->middleware('auth');

