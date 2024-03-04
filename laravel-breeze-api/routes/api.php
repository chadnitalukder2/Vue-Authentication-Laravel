<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->get('/users', function (Request $request) {
    return $request->user();
});

Route::get('/get_category', [CategoryController::class, 'get_category']);
Route::get('/delete_category/{id}', [CategoryController::class, 'delete_category']);
Route::post('/add_category', [CategoryController::class, 'add_category']);

Route::get('/get_brand', [BrandController::class, 'get_brand']);
Route::get('/delete_brand/{id}', [BrandController::class, 'delete_brand']);
Route::post('/add_brand', [BrandController::class, 'add_brand']);


Route::get('/get_product', [ProductController::class, 'get_product']);
Route::post('/add_products', [ProductController::class, 'add_products']);
Route::get('/edit_product/{id}', [ProductController::class, 'edit_product']);
Route::post('/update_product/{id}', [ProductController::class, 'update_product']);

Route::get('/delete_product/{id}', [ProductController::class, 'delete_product']);
