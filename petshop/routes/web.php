<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\ProductController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\IndexController;

Route::get('/dogs', [DogController::class, 'index'])->name("dogs.index");
Route::get('/index', [IndexController::class, 'index'])->name('user.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/favorites', [App\Http\Controllers\FavoritesController::class, 'index'])->name('favorite.index');
Route::post('/favorite/items', [App\Http\Controllers\FavoritesController::class, 'store'])->name('favorite.store');
Route::delete('/favorite/{ID}/delete', [App\Http\Controllers\FavoritesController::class, 'destroy'])->name('favorite.delete');
Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('order.index');
Route::post('/order/items', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
Route::delete('/order/{ID}/delete', [App\Http\Controllers\OrderController::class, 'destroy'])->name('order.delete');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/cart/{ID}/destroy', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/cart/store', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store');



// always keep the bottom at the end
Route::get('/{order}', [ProductController::class, 'index'])->name("products.index");
