<?php

use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
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

Route::controller(MovieController::class)->group(function () {
    Route::get('movies', 'movies');
    Route::post('add-movie', 'addMovie');
    Route::get('view-movie/{id}', 'viewMovie');
    Route::post('update-movie/{id}', 'updateMovie');
    Route::delete('delete-movie/{id}', 'deleteMovie');
});

