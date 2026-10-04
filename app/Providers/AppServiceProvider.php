<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\View;
use App\Models\Rating;

class AppServiceProvider extends ServiceProvider
{
=======

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
>>>>>>> 517743f42db5100355eebadb92895218bc45f120
    public function register(): void
    {
        //
    }

<<<<<<< HEAD
    public function boot(): void
    {
        // Otomatis ngirim $avgRating & $totalUsers ke file welcome.blade.php
        View::composer('welcome', function ($view) {
            $avgRating = Rating::avg('stars') ?? 0;
            $totalUsers = Rating::count();

            $view->with('avgRating', round($avgRating, 1))
                 ->with('totalUsers', $totalUsers);
        });
    }
}
=======
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
>>>>>>> 517743f42db5100355eebadb92895218bc45f120
