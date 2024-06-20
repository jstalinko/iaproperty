<?php

use App\Http\Controllers\JustOrangeController;
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

Route::get('/', [JustOrangeController::class , 'index']);
Route::get('/p/{page}', [JustOrangeController::class, 'getPage'])->name('page');
Route::get('/category', [JustOrangeController::class , 'getCategory'])->name('category');
Route::get('/products' , [JustOrangeController::class , 'getProducts'])->name('products');
Route::get('/product/{slug}' , [JustOrangeController::class , 'detailProduct'])->name('detail.product');
