<?php

use App\Http\Controllers\API\PuzzleController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('/v1')->group(function () {
    Route::prefix('/users')->group(function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('/{id}', [UserController::class, 'show']);
        Route::get('/{id}/puzzles', [UserController::class, 'showWithPuzzles']);
    });

    Route::prefix('/puzzles')->group(function () {
        Route::get('/', [PuzzleController::class, 'index']);
        Route::get('/{id}', [PuzzleController::class, 'show']);
    });
});
