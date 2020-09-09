<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ObserverProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Tax::observe(\App\Observers\TaxObserver::class);
        \App\Vehicle::observe(\App\Observers\VehicleObserver::class);
        \App\Refill::observe(\App\Observers\RefillObserver::class);
    }
}
