<?php

use Illuminate\Support\Facades\Route;

Route::get('/watchlist', function () {
    return view('movie.index');
});

Route::get('/watchlist/create', function () {
    return view('movie.new');
});

Route::get('/watchlist/{id}', function () {
    return view('movie.show');
});


