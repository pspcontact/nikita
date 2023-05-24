<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

Route::get('/', [MainController::class, 'index']);

Route::get('/cabinet', function() {
    return view('cabinet');
});

Route::post('/order', [OrderController::class, 'store'])->name('storeOrder');

Route::get('/category/{id}', [MainController::class, 'show'])->name('showCategory');

Route::get('/cart/{id}', [CartController::class, 'show'])->name('showCart');
Route::post('/', [CartController::class, 'store'])->name('storeCart');
Route::post('/cart/delete/', [CartController::class, 'destroy'])->name('deleteItemInCart');

Auth::routes();

Route::group(['middleware' => 'role:admin'], function () {
    Route::prefix('admin')->group(function () {

        Route::get('/', [ItemController::class, 'index']);
        Route::post('/', [ItemController::class, 'store'])->name('storeItem');
        Route::get('/item/{id}/edit', [ItemController::class, 'edit'])->name('editItem');
        Route::post('/item/{id}/edit', [ItemController::class, 'update'])->name('updateItem');
        Route::get('/item/{id}/delete', [ItemController::class, 'destroy'])->name('deleteItem');

        Route::get('/category', [CategoryController::class, 'index']);
        Route::post('/category', [CategoryController::class, 'store'])->name('storeCategory');
        Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('editCategory');
        Route::post('/category/{id}/edit', [CategoryController::class, 'update'])->name('updateCategory');
        Route::get('/category/{id}/delete', [CategoryController::class, 'destroy'])->name('deleteCategory');

        Route::get('/orders', [OrderController::class, 'index']);


    });
});
