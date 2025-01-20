<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/about', function () {
    return view('home.about')
    ->with([
        "title" => "Acerca De",
        "subtitle" => "Información acerca de esto",
        "description" => "Descripción ultra importante sobre lo que sea esto",
        "author" => "Autor super relevante"
    ]);
});

Route::get('/products/{id}',[ProductController::class, 'show']);

Route::get('/admin', [AdminHomeController::class, 'index']);

Route::get('/admin/products', [AdminProductController::class, 'index']);

Route::post('/admin/products', [AdminProductController::class, 'store']);

Route::post('/admin/products', [AdminProductController::class, 'store']);