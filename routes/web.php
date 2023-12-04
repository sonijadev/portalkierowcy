<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
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

Route::get('/', [WelcomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/list', [UserController::class,'index'])->Middleware('auth');

Route::delete('users/{user}', [UserController::class,'destroy'])->Middleware('auth');

Route::get('/products', [ProductController::class, 'index'])->name('products.index')->Middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->Middleware('auth');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show')->Middleware('auth');
Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit')->Middleware('auth');
Route::post('/products', [ProductController::class, 'store'])->name('products.store')->Middleware('auth');
Route::post('/products/{product}', [ProductController::class, 'update'])->name('products.update')->Middleware('auth');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->Middleware('auth');