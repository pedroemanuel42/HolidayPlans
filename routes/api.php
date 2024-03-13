<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolidayPlanController;
use App\Http\Controllers\CreateTokenController;

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

Route::middleware('client')->group(function () {
    Route::get('/holiday-plans', [HolidayPlanController::class, 'index']);
    Route::get('/holiday-plans/{id}', [HolidayPlanController::class, 'show']);
    Route::post('/holiday-plans', [HolidayPlanController::class, 'store']);
    Route::put('/holiday-plans/{id}', [HolidayPlanController::class, 'update']);
    Route::delete('/holiday-plans/{id}', [HolidayPlanController::class, 'destroy']);
    Route::get('/holiday-plans/generate-pdf/{id}', [HolidayPlanController::class, 'generatePDF']);
});

Route::post('/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');
