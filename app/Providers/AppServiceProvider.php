<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Rating;

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
        // Mengirim data rating ke welcome.blade.php
        View::composer('welcome', function ($view) {
            $avgRating = Rating::avg('stars') ?? 0;
            $totalUsers = Rating::count();

            $view->with('avgRating', round($avgRating, 1))
                 ->with('totalUsers', $totalUsers);
        });
    }
}