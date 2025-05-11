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
        $this->loadRoutesFrom(__DIR__.'/../routes/dashboard.php');
    }
}
