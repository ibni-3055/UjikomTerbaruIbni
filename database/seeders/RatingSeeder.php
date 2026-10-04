<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    public function run(): void
    {
        // Masukkan beberapa data dummy bawaan
        Rating::create(['stars' => 5, 'ip_address' => '127.0.0.1']);
        Rating::create(['stars' => 5, 'ip_address' => '127.0.0.2']);
        Rating::create(['stars' => 4, 'ip_address' => '127.0.0.3']);
    }
}