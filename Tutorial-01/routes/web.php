<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/products');
});

Route::get('/products', [ProductController::class, 'index'])
    ->name('product.index');

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('product.create');

Route::post('/products/save', [ProductController::class, 'save'])
    ->name('product.save');

Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('product.show');
