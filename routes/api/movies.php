<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::get('/', [MoviesController::class, 'index']);
Route::get('/{id}', [MoviesController::class, 'show'])->where('id', '[0-9]+');
