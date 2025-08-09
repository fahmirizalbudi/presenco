<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return to_route('overview');
});

Route::get('/overview', function () {
    return view('pages.overview.index');
})->name('overview');

Route::resource('users', UserController::class)->except(['show']);