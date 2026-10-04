<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    // Simpan rating dari pengunjung
    public function store(Request $request)
    {
        $validated = $request->validate([
            'stars' => 'required|integer|min:1|max:5',
        ]);

        // Simpan rating
        Rating::create([
            'stars' => $validated['stars'],
            'ip_address' => $request->ip(),
        ]);

        // Hitung rata-rata dan jumlah rating
        $avgRating = Rating::avg('stars') ?? 0;
        $totalUsers = Rating::count();

        // Kirim respons ke JavaScript
        return response()->json([
            'success' => true,
            'message' => 'Terima kasih telah memberikan rating!',
            'average' => round($avgRating, 1),
            'total' => $totalUsers,
        ]);
    }
}