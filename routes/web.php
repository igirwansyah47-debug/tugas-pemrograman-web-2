<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CategoryController;

Route::get('movies/trash', [MovieController::class, 'trash'])->name('movies.trash');
Route::put('movies/{id}/restore', [MovieController::class, 'restore'])->name('movies.restore');

Route::resource('movies', MovieController::class);
Route::resource('categories', CategoryController::class);