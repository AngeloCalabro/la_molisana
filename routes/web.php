<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ProductController;
use App\Http\Controllers\Guest\RecipeController;
use App\Http\Controllers\Guest\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/products', [HomeController::class, 'index'])->name('products.index'); ////se non dovessi usare RESOURCE

Route::resource('products', ProductController::class);
Route::resource('recipes', RecipeController::class);
