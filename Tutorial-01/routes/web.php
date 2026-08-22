<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');

Route::get('/about', function () {
    $data1 = 'About us - Online Store';
    $data2 = 'About us';
    $description = 'This is an about page ...';
    $author = 'Developed by: Leidy Roldan';

    return view('home.about')
        ->with('title', $data1)
        ->with('subtitle', $data2)
        ->with('description', $description)
        ->with('author', $author);
})->name('home.about');

Route::get('/products', [ProductController::class, 'index'])
    ->name('product.index');

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('product.create');

Route::post('/products/save', [ProductController::class, 'save'])
    ->name('product.save');

Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('product.show');
