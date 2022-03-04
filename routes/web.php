<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\CategoryController;

Route::prefix('admin')->group(function () {
    Route::resource('/', AdminController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/watch', WatchController::class);
});
