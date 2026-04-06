<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MovieController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index']); 

Route::get('/watchlist', [MovieController::class, 'index'])->name('movie.index');
Route::get('/watchlist/create', [MovieController::class, 'create'])->name('movie.create');
Route::get('/watchlist/{movie}', [MovieController::class, 'show'])->name('movie.show');
Route::post('/watchlist', [MovieController::class, 'store'])->name('movie.store');
Route::delete('/watchlist/{movie}', [MovieController::class, 'destroy'])->name('movie.destroy');
Route::post('/watchlist/{movie}', [CommentController::class, 'store'])->name('comments.store');


