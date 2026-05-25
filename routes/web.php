<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CategoryController;

Route::resource('movies', MovieController::class);
Route::resource('categories', CategoryController::class);