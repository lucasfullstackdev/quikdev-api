<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrendsController;

Route::get('/', [TrendsController::class, 'index']);
