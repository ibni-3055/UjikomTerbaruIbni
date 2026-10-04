<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri & Fasilitas - SMK Negeri 4 Kota Bogor</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    @vite(['resources/css/app.css'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
        }
        
        /* Galeri Card Styling */
        .gallery-card {
            height: 260px;
            border-radius: 1rem;
            overflow: hidden;
            position: relative;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .gallery-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.2);
        }
        .gallery-card img {
            transition: transform 0.5s ease;
        }
        .gallery-card:hover img {
            transform: scale(1.05);
        }
        .gallery-overlay {
            background: linear-gradient(to top, rgba(15, 23, 42, 0.9) 0%, rgba(15, 23, 42, 0.2) 60%, rgba(0,0,0,0) 100%);
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: flex-end;
            padding: 1.5rem;
        }
    </style>
</head>
<!-- Menggunakan Flexbox Layout untuk mengunci Sticky Footer -->
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
<<<<<<< HEAD
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3 fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        
        <!-- 1. Logo di Kiri (Logo Sekolah & Logo FrameProject) -->
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold me-0" href="{{ url('/') }}">
            <img src="{{ asset('images/logo-smkn4.svg') }}" alt="Logo SMKN 4 Bogor" style="height: 40px; width: auto; max-width: 150px; object-fit: contain;">
            <div class="border-end border-white opacity-50 my-1 d-none d-sm-block" style="height: 24px;"></div>
            <img src="{{ asset('images/LogoFrame.png') }}" alt="Logo FrameProject" style="height: 35px; width: auto; max-width: 120px; object-fit: contain;">
        </a>
        
        <!-- Tombol Toggler (Khusus Layar HP/Mobile) -->
        <button class="navbar-toggler border-0 shadow-none ms-auto me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- 2. Container Menu Navigasi & Tombol -->
        <div class="collapse navbar-collapse" id="navbarNav">
            
            <!-- Menu Utama Desktop (Tengah Presisi di Desktop) -->
            <ul class="navbar-nav mx-auto d-none d-lg-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}#Beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->is('berita*') ? 'active' : '' }}" href="{{ url('/berita') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->is('jurusan*') ? 'active' : '' }}" href="{{ url('/jurusan') }}">Jurusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->is('galeri*') ? 'active' : '' }}" href="{{ url('/galeri') }}">Galeri</a>
                </li>
            </ul>

            <!-- Menu Khusus Tampilan HP / Mobile (Collapse) -->
            <ul class="navbar-nav d-lg-none my-3 text-center border-top border-secondary border-opacity-25 pt-2">
                <li class="nav-item"><a class="nav-link py-2" href="/#Beranda">Beranda</a></li>
                <li class="nav-item"><a class="nav-link py-2" href="{{ url('/berita') }}">Berita</a></li>
                <li class="nav-item"><a class="nav-link py-2" href="{{ url('/jurusan') }}">Jurusan</a></li>
                <li class="nav-item"><a class="nav-link py-2" href="{{ url('/galeri') }}">Galeri</a></li>
            </ul>

            <!-- 3. Tombol Masuk / Dashboard di Kanan -->
            <div class="text-center pt-2 pt-lg-0">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-purple border-0 fw-semibold w-100 w-lg-auto px-4 py-2">
                            <i class="bi bi-speedometer2 me-1"></i> Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-purple border-0 fw-semibold w-100 w-lg-auto px-4 py-2">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Masuk
                        </a>
                    @endauth
                @endif
            </div>

        </div>

    </div>
</nav>
=======
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3 fixed-top">
        <div class="container">
            <!-- Logo di Kiri (Logo Sekolah & Logo FrameProject) -->
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="{{ url('/') }}">
            <img src="{{ asset('images/logo-smkn4.svg') }}" alt="Logo SMKN 4 Bogor" height="40">
            
            <!-- Garis Pembatas Tipis -->
            <div class="border-end border-white opacity-50 my-1" style="height: 24px;"></div>
            
            <img src="{{ asset('images/LogoFrame.png') }}" alt="Logo FrameProject" height="35">
        </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav position-absolute start-50 translate-middle-x">
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}#Beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ request()->is('berita*') ? 'active' : '' }}" href="{{ url('/berita') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ request()->is('jurusan*') ? 'active' : '' }}" href="{{ url('/jurusan') }}">Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ request()->is('galeri*') ? 'active' : '' }}" href="{{ url('/galeri') }}">Galeri</a>
                    </li>
                </ul>

                <div class="ms-auto">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-purple border-0 fw-semibold">
                                <i class="bi bi-speedometer2 me-1"></i> Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-purple border-0 fw-semibold">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Masuk
                            </a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>
>>>>>>> 517743f42db5100355eebadb92895218bc45f120

    <!-- Header Galeri -->
    <section class="pt-5 mt-5 pb-4 bg-white border-bottom">
        <div class="container pt-4 text-center">
            <h1 class="fw-bold text-uppercase" style="letter-spacing: -0.5px; color: #0f172a;">GALERI KEGIATAN SEKOLAH</h1>
            <p class="text-muted col-md-8 mx-auto small mb-0">
                Kumpulan dokumentasi kegiatan serta momen-momen penting di lingkungan SMK Negeri 4 Kota Bogor.
            </p>
        </div>
    </section>

    <!-- Grid Foto Galeri Penuh (flex-grow-1 memaksa area konten mendorong footer ke bawah) -->
    <section class="py-5 flex-grow-1">
        <div class="container">
            <div class="row g-4">
                
                @forelse($galeris ?? $galeri ?? [] as $g)
                    <!-- Item Galeri Dinamis -->
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-card">
                            <img src="{{ asset('storage/' . $g->foto) }}" alt="{{ $g->nama_tempat }}" class="w-100 h-100 object-fit-cover">
                            <div class="gallery-overlay">
                                <h5 class="text-white fw-bold mb-0 text-truncate">{{ $g->nama_tempat }}</h5>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Tampilan Jika Belum Ada Foto -->
                    <div class="col-12 text-center py-5">
                        <i class="bi bi-images fs-1 text-muted d-block mb-2"></i>
                        <p class="text-muted fw-semibold">Belum ada galeri foto yang diunggah.</p>
                    </div>
                @endforelse

            </div> <!-- End Row -->
        </div>
    </section>

<<<<<<< HEAD
    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4 mt-3">
        <div class="container text-center text-md-start">
            <div class="row g-4">

                <!-- Kolom 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mb-3">
                        <img src="{{ asset('images/logo-smkn4.svg') }}" alt="Logo SMKN 4 Bogor" height="40">
                        <h5 class="fw-bold text-white mb-0 fs-6 fs-md-5">SMKN 4 KOTA BOGOR</h5>
=======
    <!-- Footer (Otomatis terkunci di paling bawah layar) -->
    <footer class="bg-dark text-white pt-5 pb-4 mt-auto">
        <div class="container text-center text-md-start">
            <div class="row g-4">

                <!-- Kolom 1: Profil Sekolah & Logo -->
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="{{ asset('images/logo-smkn4.svg') }}" alt="Logo SMKN 4 Bogor" height="45">
                        <h5 class="fw-bold text-white mb-0">SMKN 4 KOTA BOGOR</h5>
>>>>>>> 517743f42db5100355eebadb92895218bc45f120
                    </div>
                    <p class="text-secondary small leading-relaxed">
                        Mencetak generasi unggul dalam teknologi, berkarakter, dan siap bersaing di masa depan melalui pendidikan kejuruan yang berkualitas.
                    </p>
<<<<<<< HEAD
                    <div class="d-flex gap-3 mt-3 justify-content-center justify-content-md-start">
                        <a href="https://www.facebook.com/smknegeri4bogor/?locale=id_ID" target="_blank" class="text-white bg-secondary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center text-decoration-none" style="width: 38px; height: 38px;">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/smkn4kotabogor/" target="_blank" class="text-white bg-secondary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center text-decoration-none" style="width: 38px; height: 38px;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@smknegeri4bogor905" target="_blank" class="text-white bg-secondary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center text-decoration-none" style="width: 38px; height: 38px;">
=======
                    <!-- Sosmed Icons -->
                    <div class="d-flex gap-3 mt-3">
                        <a href="https://www.facebook.com/smknegeri4bogor/?locale=id_ID" class="text-white bg-secondary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center text-decoration-none" style="width: 38px; height: 38px;">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/smkn4kotabogor/" class="text-white bg-secondary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center text-decoration-none" style="width: 38px; height: 38px;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@smknegeri4bogor905" class="text-white bg-secondary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center text-decoration-none" style="width: 38px; height: 38px;">
>>>>>>> 517743f42db5100355eebadb92895218bc45f120
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>

<<<<<<< HEAD
                <!-- Kolom 2 -->
                <div class="col-6 col-md-6 col-lg-2">
                    <h6 class="fw-bold text-uppercase mb-3 text-primary small">Navigasi</h6>
                    <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                        <li><a href="#Beranda" class="text-secondary text-decoration-none">Beranda</a></li>
=======
                <!-- Kolom 2: Navigasi Cepat -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold text-uppercase mb-3 text-primary">Navigasi</h6>
                    <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                        <li><a href="{{ url('/') }}#Beranda" class="text-secondary text-decoration-none">Beranda</a></li>
>>>>>>> 517743f42db5100355eebadb92895218bc45f120
                        <li><a href="#tentang" class="text-secondary text-decoration-none">Tentang Sekolah</a></li>
                        <li><a href="#Berita" class="text-secondary text-decoration-none">Berita Sekolah</a></li>
                        <li><a href="#jurusan" class="text-secondary text-decoration-none">Program Keahlian</a></li>
                        <li><a href="#galeri" class="text-secondary text-decoration-none">Galeri</a></li>
                    </ul>
                </div>

<<<<<<< HEAD
                <!-- Kolom 3 -->
                <div class="col-6 col-md-6 col-lg-3">
                    <h6 class="fw-bold text-uppercase mb-3 text-primary small">Jurusan</h6>
                    <ul class="list-unstyled small mb-0 d-flex flex-column gap-2 text-secondary">
                        <li><span>PPLG</span></li>
                        <li><span>TJKT</span></li>
                        <li><span>TO</span></li>
                        <li><span>TP</span></li>
                    </ul>
                </div>

                <!-- Kolom 4 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <h6 class="fw-bold text-uppercase mb-3 text-primary small">Kontak Kami</h6>
                    <ul class="list-unstyled small mb-0 d-flex flex-column gap-3 text-secondary">
                        <li class="d-flex gap-2 justify-content-center justify-content-md-start">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                            <span>Jl. Raya Tajur, Kp. Muara, RT.03/RW.04, Sindangrasa, Bogor Timur, Kota Bogor</span>
                        </li>
                        <li class="d-flex gap-2 align-items-center justify-content-center justify-content-md-start">
                            <i class="bi bi-telephone-fill text-primary"></i>
                            <span>(0251) 8242411</span>
                        </li>
                        <li class="d-flex gap-2 align-items-center justify-content-center justify-content-md-start">
=======
                <!-- Kolom 3: Jurusan -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-bold text-uppercase mb-3 text-primary">Jurusan</h6>
                    <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                        <li><span class="text-secondary">PPLG (Pengembangan Perangkat Lunak)</span></li>
                        <li><span class="text-secondary">TKT (Teknik Jaringan Komputer)</span></li>
                        <li><span class="text-secondary">TO (Teknik Otomotif)</span></li>
                        <li><span class="text-secondary">TP (Teknik Pengelasan)</span></li>
                    </ul>
                </div>

                <!-- Kolom 4: Kontak Sekolah -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-bold text-uppercase mb-3 text-primary">Kontak Kami</h6>
                    <ul class="list-unstyled small mb-0 d-flex flex-column gap-3 text-secondary">
                        <li class="d-flex gap-2">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                            <span>Jl. Raya Tajur, Kp. Muara, RT.03/RW.04, Sindangrasa, Bogor Timur, Kota Bogor</span>
                        </li>
                        <li class="d-flex gap-2 align-items-center">
                            <i class="bi bi-telephone-fill text-primary"></i>
                            <span>(0251) 8242411</span>
                        </li>
                        <li class="d-flex gap-2 align-items-center">
>>>>>>> 517743f42db5100355eebadb92895218bc45f120
                            <i class="bi bi-envelope-fill text-primary"></i>
                            <span>info@smkn4bogor.sch.id</span>
                        </li>
                    </ul>
                </div>

            </div>

            <hr class="border-secondary my-4 opacity-25">

<<<<<<< HEAD
=======
            <!-- Bottom Copyright -->
>>>>>>> 517743f42db5100355eebadb92895218bc45f120
            <div class="row align-items-center small text-secondary">
                <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                    &copy; {{ date('Y') }} SMKN 4 Kota Bogor. All rights reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
<<<<<<< HEAD
                    <span>Dikembangkan oleh <strong class="text-white">Tim FrameProject</strong></span>
=======
                    <span>Dikembangkan oleh <strong class="text-white">Tim SMKN 4 Bogor</strong></span>
>>>>>>> 517743f42db5100355eebadb92895218bc45f120
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>