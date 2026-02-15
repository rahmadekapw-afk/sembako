<?php

namespace App\Providers;

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
        \Illuminate\Support\Facades\Hash::extend('sha1', function ($app) {
            return new \App\Hashing\Sha1Hasher();
        });

        \App\Models\StockTransaction::observe(\App\Observers\StockTransactionObserver::class);
        \App\Models\Sale::observe(\App\Observers\SaleObserver::class);
    }
}
