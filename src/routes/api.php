<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Airport\Domains\Airport\Controllers\Controller as AirportController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function (Request $request) {
    return response()->json([
        'message' => 'Hello World',
        'data' => [
            'ip' => $request->ip(),
        ]
    ]);
});

Route::prefix('v1')->group(function (): void {
    Route::prefix('airport')->name('airport-')->group(function (): void {
        Route::get('/search', [AirportController::class, 'search'])->name('search');
    });
});
