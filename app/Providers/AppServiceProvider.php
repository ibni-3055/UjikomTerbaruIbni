<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Rating;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

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