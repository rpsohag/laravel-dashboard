<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProfileController;

$dashboardPrefix = config('laravel-dashboard.dashboard_url');

Route::prefix($dashboardPrefix)->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
});