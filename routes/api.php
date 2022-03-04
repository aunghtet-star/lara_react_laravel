<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/category', [ApiController::class,'showCategory']);
Route::get('/watch', [ApiController::class,'showWatch']);
