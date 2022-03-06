<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenresController;

Route::get('/', [GenresController::class, 'index']);
