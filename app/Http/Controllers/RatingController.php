<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    // Simpan Rating dari pengunjung
    public function store(Request $request)
    {
        $request->validate([
            'stars' => 'required|integer|min:1|max:5',
        ]);

        Rating::create([
            'stars' => $request->stars,
            'ip_address' => $request->ip(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Terima kasih atas penilaian Anda!'
        ]);
    }
}
