<?php

use App\Http\Controllers\PresenceController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return to_route('overview');
});

Route::get('/overview', function () {
    return view('pages.overview.index');
})->name('overview');

Route::resource('users', UserController::class)->except(['show']);
Route::resource('presences', PresenceController::class);
Route::get('presences/{date}/view', [PresenceController::class, 'view'])->name('presences.view');
Route::get('qr', QrController::class);