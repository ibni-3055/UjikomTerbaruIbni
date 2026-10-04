<?php
namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BeritaController extends Controller {
    public function index() {
        $beritas = Berita::latest('tanggal_upload')->get();
        return view('berita.index', compact('beritas'));
    }

    public function update(Request $request, $id)
{
    // 1. Validasi input
    $request->validate([
        'judul'     => 'required|string|max:255',
        'deskripsi' => 'required',
        'foto'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // 2. Cari data berita
    $berita = Berita::findOrFail($id);

    // 3. Update data teks
    $berita->judul = $request->judul;
    $berita->deskripsi = $request->deskripsi; // sesuaikan jika nama kolom di DB 'isi'

    // 4. Cek jika ada foto baru yang diunggah
    if ($request->hasFile('foto')) {
        // Hapus foto lama dari storage jika ada
        if ($berita->foto && Storage::disk('public')->exists($berita->foto)) {
            Storage::disk('public')->delete($berita->foto);
        }

        // Simpan foto baru ke storage/app/public/berita
        $path = $request->file('foto')->store('berita', 'public');
        $berita->foto = $path; // sesuaikan jika nama kolom di DB 'gambar'/'image'
    }

    // 5. Simpan perubahan
    $berita->save();

    return redirect()->back()->with('success', 'Berita berhasil diperbarui!');
}

    public function store(Request $request) {
        $request->validate([
            'judul'          => 'required',
            'deskripsi'      => 'required',
            'foto'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal_upload' => 'required|date',
        ]);

        $path = $request->file('foto') ? $request->file('foto')->store('berita', 'public') : null;

        Berita::create([
            'judul'          => $request->judul,
            'deskripsi'      => $request->deskripsi,
            'foto'           => $path,
            'tanggal_upload' => $request->tanggal_upload,
        ]);
        return back()->with('success', 'Berita berhasil terbit!');
    }
    public function destroy($id) {
        $berita = Berita::findOrFail($id);
        if ($berita->foto) Storage::disk('public')->delete($berita->foto);
        $berita->delete();
        return back()->with('success', 'Berita dihapus!');
    }
}