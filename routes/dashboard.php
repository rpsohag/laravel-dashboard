<?php

use Illuminate\Support\Facades\Route;
use Rpsohag\LaravelDashboard\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');