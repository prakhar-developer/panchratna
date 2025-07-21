<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Fix for older MySQL versions (max key length issue)
        Schema::defaultStringLength(191);

        // Force HTTPS if REDIRECT_HTTPS is true in .env
        if (env('REDIRECT_HTTPS')) {
            URL::forceScheme('https');
        }
    }
}
