<?php

namespace App\Providers;

use App\PriceCalculator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(PriceCalculator::class, function () {

            return new PriceCalculator($this->app->make('config')['taxes']);

        });

    }
}