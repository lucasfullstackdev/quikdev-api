<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/trends')->group(realpath(__DIR__ . '/api/trends.php'));
Route::prefix('/movies')->group(realpath(__DIR__ . '/api/movies.php'));
