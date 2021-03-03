<?php

namespace App\Providers;

use App\Services\RapidAPI;
use Illuminate\Support\ServiceProvider;

class RapidAPIServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RapidAPI::class, function ($app) {
            return new RapidAPI(config('rapidAPI'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
