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
        $this->loadRoutesFrom(__DIR__.'/../routes/dashboard.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'LaravelDashboard');
    }

    private function defineAssetsPublisshing()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-dashboard.php' => config_path('laravel-dashboard.php'),
            __DIR__.'/../routes/dashboard.php' => base_path('routes/dashboard.php'),
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-dashboard'),
            __DIR__.'/../public/laravel-dashboard' => public_path('laravel-dashboard'),
        ],'laravel-dashboard');
    }
}
