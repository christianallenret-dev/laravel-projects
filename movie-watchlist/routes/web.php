<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index']); 

Route::get('/watchlist', [MovieController::class, 'index'])->name('movie.index');
Route::get('/watchlist/create', [MovieController::class, 'create'])->name('movie.create');
Route::get('/watchlist/{id}', [MovieController::class, 'show'])->name('movie.show');


