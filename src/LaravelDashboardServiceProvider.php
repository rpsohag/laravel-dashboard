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
        $this->defineAssetsPublisshing();
        $this->publishes([
            __DIR__.'/../config/laravel-dashboard.php' => config_path('laravel-dashboard.php'),
            __DIR__.'/../routes/dashboard.php' => base_path('routes/dashboard.php'), // Added route publishing here
        ],'laravel-dashboard');
        $this->loadRoutesFrom(__DIR__.'/../routes/dashboard.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'LaravelDashboard');
    }

    private function defineAssetsPublisshing()
    {
        $this->publishes([
            __DIR__.'/../public/laravel-dashboard/js' => public_path('laravel-dashboard/js'),
            __DIR__.'/../public/laravel-dashboard/css' => public_path('laravel-dashboard/css'),
            // Removed route publishing from here
        ],'laravel-dashboard');
    }
}
