<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
<<<<<<< HEAD
=======
    // Simpan Rating dari pengunjung
>>>>>>> 517743f42db5100355eebadb92895218bc45f120
    public function store(Request $request)
    {
        $request->validate([
            'stars' => 'required|integer|min:1|max:5',
        ]);

        Rating::create([
            'stars' => $request->stars,
            'ip_address' => $request->ip(),
        ]);

<<<<<<< HEAD
        $avgRating = Rating::avg('stars') ?? 0;
        $totalUsers = Rating::count();

        return response()->json([
            'success' => true,
            'message' => 'Terima kasih atas penilaian Anda!',
            'average' => round($avgRating, 1),
            'total' => $totalUsers
        ]);
    }
}
=======
        return response()->json([
            'success' => true,
            'message' => 'Terima kasih atas penilaian Anda!'
        ]);
    }
}
>>>>>>> 517743f42db5100355eebadb92895218bc45f120
