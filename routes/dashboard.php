<?php

use Illuminate\Support\Facades\Route;
use Rpsohag\LaravelDashboard\Http\Controllers\DashboardController;

Route::get(config('laravel-dashboard.dashboard_url'), [DashboardController::class, 'index'])->name('dashboard.index');