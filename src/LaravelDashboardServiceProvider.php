<?php

namespace Rpsohag\LaravelDashboard;

use Illuminate\Support\ServiceProvider;

class LaravelDashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/laravel-dashboard.php' => config_path('laravel-dashboard.php'),
        ],'laravel-dashboard');
        $this->loadRoutesFrom(__DIR__.'/../routes/dashboard.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'LaravelDashboard');
    }
}
