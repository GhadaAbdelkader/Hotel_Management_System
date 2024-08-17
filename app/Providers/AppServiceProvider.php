<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public const HOME = '/';

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
        Blade::component('admin.components.register_layout', 'register_layout');

        // New component registration
        Blade::component('hotel.components.layout', 'hotel-layout');
    }
}
