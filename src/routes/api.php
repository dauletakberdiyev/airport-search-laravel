<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Airport\Domains\Airport\Controllers\Controller as AirportController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function (): void {
    Route::prefix('airport')->name('airport-')->group(function (): void {
        Route::get('/search', [AirportController::class, 'search'])->name('search');
    });
});
