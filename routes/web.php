<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;


Route::get('/',[productController::class,'products'])->name('products');
Route::post('/add-product',[productController::class,'addProducts'])->name('add.product');
Route::post('/update-product',[productController::class,'updateProducts'])->name('update.product');
Route::post('/delete-product',[productController::class,'deleteproduct'])->name('delete.product');