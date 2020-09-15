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
        \App\ModelsNicolasRomero\Tax::observe(\App\Observers\TaxObserver::class);
        \App\ModelsFuelStation\Vehicle::observe(\App\Observers\VehicleObserver::class);
        \App\ModelsFuelStation\Refill::observe(\App\Observers\RefillObserver::class);
    }
}
