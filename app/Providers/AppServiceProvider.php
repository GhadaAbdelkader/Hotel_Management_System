<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Existing component registration
        Blade::component('admin.components.layout', 'layout');

        // New component registration
        Blade::component('hotel.components.layout', 'hotel-layout');
    }
}
