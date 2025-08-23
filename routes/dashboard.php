<?php

use Illuminate\Support\Facades\Route;
use Rpsohag\LaravelDashboard\Http\Controllers\Backend\DashboardController;
use Rpsohag\LaravelDashboard\Http\Controllers\Backend\ProfileController;

$dashboardPrefix = config('laravel-dashboard.dashboard_url');

Route::prefix($dashboardPrefix)->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
});