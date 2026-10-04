<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - SMK Negeri 4 Kota Bogor</title>

    <!-- Google Fonts (Bebas Neue & Google Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Panggil file CSS Vite -->
    @vite(['resources/css/app.css'])

    <style>
        /* Style Tambahan untuk Mobile Responsiveness */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background: rgba(15, 23, 42, 0.95);
                backdrop-filter: blur(10px);
                padding: 1.25rem;
                border-radius: 1rem;
                margin-top: 0.75rem;
                box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            }
            .hero-title {
                font-size: clamp(42px, 14vw, 90px) !important;
            }
        }
        
        .star-btn {
            color: #ffc107;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .star-btn:hover {
            transform: scale(1.2);
        }
    </style>
</head>
<body>

    <!-- Hero Header -->
    <header id="Beranda" class="hero-header d-flex flex-column justify-content-between position-relative" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.7) 100%), url('{{ asset('images/hero-sekolah.jpg') }}'); min-height: 100vh; background-size: cover; background-position: center;">
        
        <!-- Navbar -->
<<<<<<< HEAD
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3 fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        
        <!-- 1. Logo di Kiri -->
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold me-0" href="{{ url('/') }}">
            <img src="{{ asset('images/logo-smkn4.svg') }}" alt="Logo SMKN 4 Bogor" style="height: 40px; width: auto; max-width: 150px; object-fit: contain;">
            <div class="border-end border-white opacity-50 my-1 d-none d-sm-block" style="height: 24px;"></div>
            <img src="{{ asset('images/LogoFrame.png') }}" alt="Logo FrameProject" style="height: 32px; width: auto; max-width: 120px; object-fit: contain;">
        </a>
        
        <!-- Tombol Toggler (Khusus Tampilan HP) -->
        <button class="navbar-toggler border-0 shadow-none ms-auto me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- 2. Container Menu & Tombol -->
        <div class="collapse navbar-collapse" id="navbarNav">
            
            <!-- Menu Utama Desktop (Tengah Presisi) -->
            <ul class="navbar-nav mx-auto d-none d-lg-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->is('/') ? 'active' : '' }}" href="#Beranda">Beranda</a>
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
                <li class="nav-item"><a class="nav-link py-2" href="#Beranda">Beranda</a></li>
                <li class="nav-item"><a class="nav-link py-2" href="{{ url('/berita') }}">Berita</a></li>
                <li class="nav-item"><a class="nav-link py-2" href="{{ url('/jurusan') }}">Jurusan</a></li>
                <li class="nav-item"><a class="nav-link py-2" href="{{ url('/galeri') }}">Galeri</a></li>
            </ul>

            <!-- 3. Tombol Masuk/Dashboard di Kanan -->
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
            <div class="container position-relative d-flex align-items-center justify-content-between">
                
                <!-- Logo di Kiri (Logo Sekolah & Logo FrameProject) -->
<a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="{{ url('/') }}">
    <img src="{{ asset('images/logo-smkn4.svg') }}" alt="Logo SMKN 4 Bogor" style="height: 40px; width: auto; max-width: 150px; object-fit: contain;">
    
    <!-- Garis Pembatas Tipis -->
    <div class="border-end border-white opacity-50 my-1 d-none d-sm-block" style="height: 24px;"></div>
    
    <img src="{{ asset('images/LogoFrame.png') }}" alt="Logo FrameProject" style="height: 32px; width: auto; max-width: 120px; object-fit: contain;">
</a>
                
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Container Menu & Tombol -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Menu Utama Desktop -->
                    <ul class="navbar-nav mx-auto d-none d-lg-flex">
                        <li class="nav-item">
                            <a class="nav-link mx-2 {{ request()->is('/') ? 'active' : '' }}" href="#Beranda">Beranda</a>
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

                    <!-- Menu untuk Tampilan Mobile/HP -->
                    <ul class="navbar-nav d-lg-none my-2 text-center">
                        <li class="nav-item"><a class="nav-link py-2" href="#Beranda">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link py-2" href="{{ url('/berita') }}">Berita</a></li>
                        <li class="nav-item"><a class="nav-link py-2" href="{{ url('/jurusan') }}">Jurusan</a></li>
                        <li class="nav-item"><a class="nav-link py-2" href="{{ url('/galeri') }}">Galeri</a></li>
                    </ul>

                    <!-- Tombol Masuk/Dashboard -->
                    <div class="ms-lg-auto text-center pt-2 pt-lg-0">
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
>>>>>>> 517743f42db5100355eebadb92895218bc45f120

        <!-- Teks Hero Tengah -->
        <div class="container my-auto pt-5 pb-4 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
<<<<<<< HEAD
                    <p class="fs-5 fs-md-3 fw-light mb-2 text-white">Selamat Datang Di Website</p>
=======
                    <p class="fs-5 fs-md-3 fw-light mb-2 text-white">Selamat Datang di Website</p>
>>>>>>> 517743f42db5100355eebadb92895218bc45f120
                    <h1 class="hero-title fw-bold mb-3 text-white" style="font-family: 'Bebas Neue', sans-serif; font-size: clamp(50px, 11vw, 170px); line-height: 1;">
                        SMK NEGERI 4<br>Kota Bogor
                    </h1>
                    <p class="lead mb-4 text-light col-lg-8 col-md-10 mx-auto fs-6 fs-md-5">
<<<<<<< HEAD
                        Bersama IbyLab, wujudkan solusi digital yang inovatif, cepat, dan terpercaya untuk masa depan Sekolah Anda.
=======
                        Mencetak generasi unggul dalam teknologi, berkarakter, dan siap bersaing di Masa Depan.
>>>>>>> 517743f42db5100355eebadb92895218bc45f120
                    </p>
                    <a href="#tentang" class="btn btn-purple btn-lg fw-semibold px-4 py-2 fs-6">
                        Tentang Sekolah <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

    </header>

    <!-- Section Tentang -->
    <section id="tentang" class="py-5" style="background-color: #f8f9fc;">
        <div class="container py-2 py-md-4">

            <!-- Judul -->
            <div class="text-center mb-4 mb-md-5">
                <span class="fw-semibold small text-uppercase" style="color: #2414A2; letter-spacing: 1.5px;">
                    Tentang Kami
                </span>
                <h2 class="fw-bold mt-2 mb-2 fs-3 fs-md-2" style="color: #1e1b4b;">
                    Mengenal SMKN 4 Bogor
                </h2>
                <p class="text-muted mb-0 small fs-md-6">
                    Sekolah kejuruan yang mempersiapkan siswa untuk masa depan.
                </p>
            </div>

            <!-- Konten Utama -->
            <div class="row align-items-center g-4 g-lg-5">

                <!-- Foto -->
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img 
                            src="{{ asset('images/hero-sekolah.jpg') }}" 
                            alt="Gedung SMKN 4 Bogor"
                            class="img-fluid rounded-4 w-100 shadow-sm"
                            style="max-height: 390px; object-fit: cover;"
                        >

                        <!-- Label Overlay -->
                        <div class="position-absolute bottom-0 start-0 m-2 m-md-3 px-3 py-2 px-md-4 py-md-3 bg-white rounded-3 shadow-sm">
                            <div class="fw-bold fs-6 fs-md-5" style="color: #2414A2;">
                                SMKN 4 Bogor
                            </div>
                            <div class="text-muted small" style="font-size: 0.75rem;">
                                Pendidikan • Kompetensi • Karakter
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informasi -->
                <div class="col-lg-6">

                    <h3 class="fw-bold mb-3 fs-4 fs-md-3" style="color: #1e1b4b;">
                        Membentuk Generasi Unggul dan Siap Menghadapi Masa Depan
                    </h3>

                    <p class="text-muted mb-4 small fs-md-6" style="line-height: 1.8;">
                        SMK Negeri 4 Kota Bogor merupakan sekolah menengah kejuruan
                        yang berkomitmen dalam mengembangkan potensi dan kompetensi
                        siswa melalui pendidikan yang berkualitas, berkarakter,
                        serta sesuai dengan kebutuhan dunia kerja dan perkembangan teknologi.
                    </p>

                    <!-- Visi & Misi -->
                    <div class="row g-3 g-md-4">

                        <!-- Visi -->
                        <div class="col-12 col-md-6">
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-bullseye fs-4" style="color: #2414A2;"></i>
                                    <h5 class="fw-bold mb-0 fs-6 fs-md-5" style="color: #1e1b4b;">
                                        Visi
                                    </h5>
                                </div>

                                <p class="text-muted small mb-0" style="line-height: 1.7;">
                                    Menjadi sekolah kejuruan unggulan yang menghasilkan
                                    lulusan kompeten, berkarakter, dan berdaya saing.
                                </p>
                            </div>
                        </div>

                        <!-- Misi -->
                        <div class="col-12 col-md-6">
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-compass fs-4" style="color: #2414A2;"></i>
                                    <h5 class="fw-bold mb-0 fs-6 fs-md-5" style="color: #1e1b4b;">
                                        Misi
                                    </h5>
                                </div>

                                <p class="text-muted small mb-0" style="line-height: 1.7;">
                                    Memberikan pendidikan berkualitas, mengembangkan
                                    kompetensi siswa, serta membangun karakter dan
                                    budaya kerja yang baik.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section Berita Sekolah -->
<section id="Berita" class="py-4 py-md-5 bg-white">
    <div class="container py-2 py-md-4">
        
        <!-- Judul Section -->
        <div class="text-center mb-4 mb-md-5">
            <h2 class="fw-bold text-uppercase fs-3 fs-md-2" style="font-family: 'Google Sans', sans-serif; color: #1e1b4b;">BERITA SEKOLAH</h2>
            <p class="text-muted small mb-0 px-2" style="font-family: 'Google Sans', sans-serif;">
                Dapatkan informasi terbaru seputar kegiatan, prestasi, dan pengumuman resmi dari SMK Negeri 4 Kota Bogor.
            </p>
        </div>

        <!-- 1. TAMPILAN DESKTOP (Grid 3 Kolom - Muncul di Layar Medium/Besar) -->
        <div class="row g-4 justify-content-center d-none d-md-flex">
            @forelse ($beritas->take(3) as $item)
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="card w-100 border-0 shadow-sm rounded-4 p-3 bg-white d-flex flex-column">
                        
                        <div class="overflow-hidden rounded-3 mb-3" style="height: 200px; width: 100%;">
                            @php
                                $fotoPath = $item->foto ?? $item->gambar ?? $item->image ?? null;
                            @endphp

                            @if($fotoPath)
                                <img src="{{ asset('storage/' . $fotoPath) }}" alt="{{ $item->judul }}" class="w-100 h-100" style="object-fit: cover;">
                            @else
                                <img src="{{ asset('images/hero-sekolah.jpg') }}" alt="{{ $item->judul }}" class="w-100 h-100" style="object-fit: cover;">
                            @endif
                        </div>
                        
                        <div class="card-body p-0 d-flex flex-column flex-grow-1">
                            <h5 class="fw-bold text-dark mb-2 fs-5">{{ $item->judul }}</h5>
                            
                            <p class="text-muted small mb-3 flex-grow-1" style="line-height: 1.6;">
                                {{ Str::limit(strip_tags($item->isi ?? $item->ringkasan ?? $item->deskripsi), 100) }}
                            </p>

                            <span class="text-secondary small mb-3 d-block" style="font-size: 0.8rem;">
                                <i class="bi bi-calendar3 me-1"></i> {{ $item->created_at->format('d F Y') }}
                            </span>

                            <div class="mt-auto">
                                <a href="{{ url('/berita/' . ($item->slug ?? $item->id)) }}" class="text-primary text-decoration-none fw-semibold d-inline-flex align-items-center gap-2 small">
                                    Baca selengkapnya <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5 text-muted">
                    <i class="bi bi-newspaper fs-1 d-block mb-2 text-secondary"></i>
                    <p class="mb-0">Belum ada berita terbaru yang diunggah.</p>
                </div>
            @endforelse
        </div>

        <!-- 2. TAMPILAN MOBILE (Slider / Carousel Pakai Tombol - Hanya Muncul di HP) -->
        <div id="beritaMobileCarousel" class="carousel slide d-md-none" data-bs-ride="carousel">
            <div class="carousel-inner pb-2">
                @forelse ($beritas->take(3) as $index => $item)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="px-4">
                            <div class="card border-0 shadow-sm rounded-4 p-3 bg-white">
                                
                                <div class="overflow-hidden rounded-3 mb-3" style="height: 200px; width: 100%;">
                                    @php
                                        $fotoPath = $item->foto ?? $item->gambar ?? $item->image ?? null;
                                    @endphp

                                    @if($fotoPath)
                                        <img src="{{ asset('storage/' . $fotoPath) }}" alt="{{ $item->judul }}" class="w-100 h-100" style="object-fit: cover;">
                                    @else
                                        <img src="{{ asset('images/hero-sekolah.jpg') }}" alt="{{ $item->judul }}" class="w-100 h-100" style="object-fit: cover;">
                                    @endif
                                </div>
                                
                                <div class="card-body p-0 d-flex flex-column">
                                    <h5 class="fw-bold text-dark mb-2 fs-6">{{ $item->judul }}</h5>
                                    
                                    <p class="text-muted small mb-3" style="line-height: 1.6;">
                                        {{ Str::limit(strip_tags($item->isi ?? $item->ringkasan ?? $item->deskripsi), 100) }}
                                    </p>

                                    <span class="text-secondary small mb-3 d-block" style="font-size: 0.8rem;">
                                        <i class="bi bi-calendar3 me-1"></i> {{ $item->created_at->format('d F Y') }}
                                    </span>

                                    <div>
                                        <a href="{{ url('/berita/' . ($item->slug ?? $item->id)) }}" class="text-primary text-decoration-none fw-semibold d-inline-flex align-items-center gap-2 small">
                                            Baca selengkapnya <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-5 text-muted">
                        <i class="bi bi-newspaper fs-1 d-block mb-2 text-secondary"></i>
                        <p class="mb-0">Belum ada berita terbaru yang diunggah.</p>
                    </div>
                @endforelse
            </div>

            <!-- Tombol Panah Kiri & Kanan (HP) -->
            @if(isset($beritas) && $beritas->isNotEmpty())
                <button class="carousel-control-prev" type="button" data-bs-target="#beritaMobileCarousel" data-bs-slide="prev" style="width: 10%;">
                    <span class="bg-dark rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 35px; height: 35px;">
                        <i class="bi bi-chevron-left text-white fs-6"></i>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#beritaMobileCarousel" data-bs-slide="next" style="width: 10%;">
                    <span class="bg-dark rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 35px; height: 35px;">
                        <i class="bi bi-chevron-right text-white fs-6"></i>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            @endif
        </div>

        <!-- Tombol "Lihat Semua Berita" (Desktop & HP) -->
        @if(isset($beritas) && $beritas->isNotEmpty())
            <div class="text-center mt-4 mt-md-5">
                <a href="{{ url('/berita') }}" class="btn btn-purple btn-lg fw-semibold px-4 py-2 shadow-sm fs-6">
                    Lihat Semua Berita <i class="bi bi-chevron-right ms-1"></i>
                </a>
            </div>
        @endif

    </div>
</section>

<!-- Section Jurusan / Program Keahlian -->
<section id="jurusan" class="py-4 py-md-5 bg-light">
    <div class="container py-2 py-md-4">
        
        <div class="text-center mb-4 mb-md-5">
            <h2 class="fw-bold text-uppercase fs-3 fs-md-2" style="letter-spacing: 1px; color: #1e1b4b;">PROGRAM KEAHLIAN</h2>
            <p class="text-muted small mb-0 px-2" style="font-family: 'Google Sans', sans-serif;">
                Pilihan jurusan unggulan yang dirancang untuk membekali siswa dengan keahlian praktis sesuai kebutuhan industri modern.
            </p>
        </div>

        <div class="row g-3 g-md-4">
            
            <!-- Jurusan 1: PPLG -->
            <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="card w-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center d-flex flex-column align-items-center">
                    <div class="rounded-circle bg-primary-subtle text-primary mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; flex-shrink: 0;">
                        <i class="bi bi-code-slash fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-1 fs-5">PPLG</h5>
                    <p class="text-secondary small fw-semibold mb-2">Pengembangan Perangkat Lunak & Gim</p>
                    <p class="text-muted small mb-0">
                        Fokus pada pemrograman web, aplikasi mobile, pembuatan gim, dan pengelolaan database modern.
                    </p>
                </div>
            </div>

            <!-- Jurusan 2: TJKT -->
            <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="card w-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center d-flex flex-column align-items-center">
                    <div class="rounded-circle bg-success-subtle text-success mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; flex-shrink: 0;">
                        <i class="bi bi-diagram-3 fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-1 fs-5">TJKT</h5>
                    <p class="text-secondary small fw-semibold mb-2">Teknik Jaringan Komputer & Telekomunikasi</p>
                    <p class="text-muted small mb-0">
                        Mempelajari infrastruktur jaringan, server, keamanan siber (cyber security), dan teknologi fiber optik.
                    </p>
                </div>
            </div>

            <!-- Jurusan 3: TO -->
            <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="card w-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center d-flex flex-column align-items-center">
                    <div class="rounded-circle bg-warning-subtle text-warning mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; flex-shrink: 0;">
                        <i class="bi bi-gear-wide-connected fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-1 fs-5">TO</h5>
                    <p class="text-secondary small fw-semibold mb-2">Teknik Otomotif</p>
                    <p class="text-muted small mb-0">
                        Pendalaman seputar pemeliharaan mesin kendaraan, sistem kelistrikan otomotif, dan teknologi kendaraan terkini.
                    </p>
                </div>
            </div>

            <!-- Jurusan 4: TP -->
            <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="card w-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center d-flex flex-column align-items-center">
                    <div class="rounded-circle bg-danger-subtle text-danger mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; flex-shrink: 0;">
                        <i class="bi bi-tools fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-1 fs-5">TP</h5>
                    <p class="text-secondary small fw-semibold mb-2">Teknik Pengelasan</p>
                    <p class="text-muted small mb-0">
                        Menguasai teknik penyambungan logam, fabrikasi struktur baja, dan standar fabrikasi industri.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Section Galeri Sekolah -->
<section id="galeri" class="py-4 py-md-5 bg-white">
    <div class="container py-2 py-md-4">
        
        <div class="text-center mb-4 mb-md-5">
            <h2 class="fw-bold text-uppercase fs-3 fs-md-2" style="font-family: 'Google Sans', sans-serif; color: #1e1b4b;">GALERI SEKOLAH</h2>
            <p class="text-muted small mb-0 px-2" style="font-family: 'Google Sans', sans-serif;">
                Dokumentasi kegiatan, fasilitas, dan momen berharga di lingkungan SMK Negeri 4 Kota Bogor.
            </p>
        </div>

        <div class="row g-3 g-md-4 justify-content-center">
            
            @forelse ($galeris->take(3) as $item)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="position-relative overflow-hidden rounded-4 shadow-sm" style="height: 240px; width: 100%;">
                        
                        @php
                            $fotoPath = $item->foto ?? $item->gambar ?? $item->image ?? null;
                            $namaFoto = $item->judul ?? $item->nama ?? $item->keterangan ?? 'Kegiatan Sekolah';
                        @endphp

                        @if($fotoPath)
                            <img src="{{ asset('storage/' . $fotoPath) }}" 
                                 alt="{{ $namaFoto }}" 
                                 class="w-100 h-100"
                                 style="object-fit: cover;">
                        @else
                            <img src="{{ asset('images/hero-sekolah.jpg') }}" 
                                 alt="{{ $namaFoto }}" 
                                 class="w-100 h-100"
                                 style="object-fit: cover;">
                        @endif

                        <div class="position-absolute bottom-0 start-0 w-100 p-3 d-flex flex-column justify-content-end" 
                             style="background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 100%); height: 70%;">
                            
                            <h5 class="text-white fw-bold mb-1 fs-6 text-truncate" title="{{ $item->nama_tempat ?? $item->judul }}">
                                {{ $item->nama_tempat ?? $item->judul ?? 'Dokumentasi Sekolah' }}
                            </h5>

                            @if(isset($item->created_at))
                                <span class="text-white-50 small" style="font-size: 0.75rem;">
                                    <i class="bi bi-calendar3 me-1"></i> {{ $item->created_at->format('d M Y') }}
                                </span>
                            @endif
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5 text-muted">
                    <i class="bi bi-images fs-1 d-block mb-2 text-secondary"></i>
                    <p class="mb-0">Belum ada foto galeri yang diunggah.</p>
                </div>
            @endforelse

        </div>

        @if(isset($galeris) && $galeris->isNotEmpty())
            <div class="text-center mt-4 mt-md-5">
                <a href="{{ url('/galeri') }}" class="btn btn-purple btn-lg fw-semibold px-4 py-2 shadow-sm fs-6">
                    Lihat Selengkapnya <i class="bi bi-chevron-right ms-1"></i>
                </a>
            </div>
        @endif

    </div>
</section>

<<<<<<< HEAD
    <!-- Card Rating Modern -->
<div class="card border-0 shadow-sm rounded-4 p-4 text-center mx-auto my-4" style="max-width: 380px; background: linear-gradient(145deg, #ffffff, #f8f9fa);">

    <!-- Judul / Teks Utama -->
    <h5 class="fw-bold text-dark mb-1">Seberapa puas kamu dengan website ini?</h5>
    <p class="text-muted small mb-3">Klik bintang di bawah untuk memberikan penilaian</p>
    
    <!-- Wrapper Bintang Interaktif -->
    <div class="rating-stars d-flex justify-content-center gap-2 mb-2" style="cursor: pointer; user-select: none;">
        @for ($i = 1; $i <= 5; $i++)
            <i class="bi bi-star star-btn fs-1 text-warning" data-value="{{ $i }}" style="transition: transform 0.2s ease;"></i>
        @endfor
    </div>

    <!-- Status Notifikasi / Pesan Terima Kasih -->
    <div id="rating-message" class="small fw-semibold text-success mt-2" style="display: none;"></div>
</div>

<!-- Meta CSRF Token (Wajib di Laravel) -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- CSS Khusus Efek Hover Bintang -->
<style>
    .star-btn:hover {
        transform: scale(1.25);
    }
</style>

<!-- JavaScript AJAX Interaktif -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll(".star-btn");
    const messageBox = document.getElementById("rating-message");
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // 1. Efek Visual saat Kursor Diarahkan (Hover)
    stars.forEach((star, index) => {
        star.addEventListener("mouseover", function () {
            highlightStars(index + 1);
        });

        star.addEventListener("mouseleave", function () {
            resetStars();
        });

        // 2. Klik Bintang untuk Kirim Rating via AJAX
        star.addEventListener("click", function () {
            const selectedStars = this.getAttribute("data-value");

            fetch('/api/ratings', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ stars: selectedStars })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    // Tampilkan pesan ucapan terima kasih
                    messageBox.innerText = "✨ " + data.message;
                    messageBox.style.display = "block";

                    // Pertahankan tampilan bintang yang dipilih
                    highlightStars(selectedStars, true);
                }
            })
            .catch(err => console.error("Error:", err));
        });
    });

    function highlightStars(count, isPermanent = false) {
        stars.forEach((s, idx) => {
            if (idx < count) {
                s.classList.remove("bi-star");
                s.classList.add("bi-star-fill");
            } else {
                s.classList.remove("bi-star-fill");
                s.classList.add("bi-star");
            }
        });
    }

    function resetStars() {
        // Jika belum diklik, bintang kembali kosong saat kursor keluar
        if (messageBox.style.display !== "block") {
            stars.forEach(s => {
                s.classList.remove("bi-star-fill");
                s.classList.add("bi-star");
            });
        }
    }
});
</script>
=======
    <!-- Section Rating Website -->
    <section class="py-4 bg-light border-top">
        <div class="container text-center">
            <h6 class="fw-bold mb-2">Beri Penilaian untuk Website Kami</h6>
            <p class="text-muted small mb-3">
                Bagaimana pengalaman Anda saat menjelajahi website SMKN 4 Bogor?
            </p>

            <div class="star-rating d-inline-flex gap-1 fs-3 mb-2" id="starContainer">
                <i class="bi bi-star star-btn" data-value="1"></i>
                <i class="bi bi-star star-btn" data-value="2"></i>
                <i class="bi bi-star star-btn" data-value="3"></i>
                <i class="bi bi-star star-btn" data-value="4"></i>
                <i class="bi bi-star star-btn" data-value="5"></i>
            </div>

            <div id="ratingMessage" class="small mt-1 text-success d-none"></div>
        </div>
    </section>

    <!-- JavaScript Rating -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const stars = document.querySelectorAll('.star-btn');
        const message = document.getElementById('ratingMessage');
        let selectedRating = 0;

        stars.forEach(star => {
            star.addEventListener('mouseover', () => {
                highlightStars(star.dataset.value);
            });

            star.addEventListener('mouseleave', () => {
                highlightStars(selectedRating);
            });

            star.addEventListener('click', () => {
                selectedRating = star.dataset.value;
                highlightStars(selectedRating);

                fetch("{{ route('rating.store') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        stars: selectedRating
                    })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        message.classList.remove('d-none');
                        message.innerText = data.message;
                        document.getElementById('starContainer').style.pointerEvents = 'none';
                    }
                })
                .catch(error => console.error(error));
            });
        });

        function highlightStars(count) {
            stars.forEach(star => {
                star.classList.toggle('bi-star-fill', star.dataset.value <= count);
                star.classList.toggle('bi-star', star.dataset.value > count);
            });
        }
    });
    </script>
>>>>>>> 517743f42db5100355eebadb92895218bc45f120

    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4 mt-3">
        <div class="container text-center text-md-start">
            <div class="row g-4">

                <!-- Kolom 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mb-3">
                        <img src="{{ asset('images/logo-smkn4.svg') }}" alt="Logo SMKN 4 Bogor" height="40">
                        <h5 class="fw-bold text-white mb-0 fs-6 fs-md-5">SMKN 4 KOTA BOGOR</h5>
                    </div>
                    <p class="text-secondary small leading-relaxed">
                        Mencetak generasi unggul dalam teknologi, berkarakter, dan siap bersaing di masa depan melalui pendidikan kejuruan yang berkualitas.
                    </p>
                    <div class="d-flex gap-3 mt-3 justify-content-center justify-content-md-start">
                        <a href="https://www.facebook.com/smknegeri4bogor/?locale=id_ID" target="_blank" class="text-white bg-secondary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center text-decoration-none" style="width: 38px; height: 38px;">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/smkn4kotabogor/" target="_blank" class="text-white bg-secondary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center text-decoration-none" style="width: 38px; height: 38px;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@smknegeri4bogor905" target="_blank" class="text-white bg-secondary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center text-decoration-none" style="width: 38px; height: 38px;">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="col-6 col-md-6 col-lg-2">
                    <h6 class="fw-bold text-uppercase mb-3 text-primary small">Navigasi</h6>
                    <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                        <li><a href="#Beranda" class="text-secondary text-decoration-none">Beranda</a></li>
                        <li><a href="#tentang" class="text-secondary text-decoration-none">Tentang Sekolah</a></li>
                        <li><a href="#Berita" class="text-secondary text-decoration-none">Berita Sekolah</a></li>
                        <li><a href="#jurusan" class="text-secondary text-decoration-none">Program Keahlian</a></li>
                        <li><a href="#galeri" class="text-secondary text-decoration-none">Galeri</a></li>
                    </ul>
                </div>

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
                            <i class="bi bi-envelope-fill text-primary"></i>
                            <span>info@smkn4bogor.sch.id</span>
                        </li>
                    </ul>
                </div>

            </div>

            <hr class="border-secondary my-4 opacity-25">

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

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<<<<<<< HEAD

    <script>
document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll(".star-btn");
    const avgText = document.getElementById("rating-avg");
    const totalText = document.getElementById("rating-total");
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    stars.forEach(star => {
        star.addEventListener("click", function () {
            const selectedStars = this.getAttribute("data-value");

            fetch('/api/ratings', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ stars: selectedStars })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    
                    // Update teks angka rata-rata dan total ulasan secara langsung
                    avgText.innerText = data.average;
                    totalText.innerText = data.total;

                    // Update tampilan icon bintang terisi (-fill) atau kosong
                    const roundedAvg = Math.round(data.average);
                    stars.forEach((s, index) => {
                        if (index < roundedAvg) {
                            s.classList.remove("bi-star");
                            s.classList.add("bi-star-fill");
                        } else {
                            s.classList.remove("bi-star-fill");
                            s.classList.add("bi-star");
                        }
                    });
                }
            })
            .catch(err => console.error("Error sending rating:", err));
        });
    });
});
</script>

=======
>>>>>>> 517743f42db5100355eebadb92895218bc45f120
</body>
</html>