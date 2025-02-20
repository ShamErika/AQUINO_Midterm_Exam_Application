<?php


use App\Http\Controllers\ProductController;

Route::get('/restaurants', [ProductController::class, 'index']);


