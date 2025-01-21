<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Models\Booking;
use App\Observers\BookingObserver;
class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Booking::observe(BookingObserver::class);
    }
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
    
}
