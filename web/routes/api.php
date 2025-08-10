<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PresenceController;
use App\Http\Middleware\ApiTokenMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('presences', [PresenceController::class, 'store'])->middleware(['auth:sanctum', ApiTokenMiddleware::class]);
