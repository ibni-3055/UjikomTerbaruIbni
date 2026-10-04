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
        
        
/* Kartu Galeri */
.gallery-item {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
}

.gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
}

/* Gambar */
.gallery-image-btn {
    width: 100%;
    height: 260px;
    padding: 0;
    border: none;
    display: block;
    position: relative;
    overflow: hidden;
    background: #eee;
    cursor: pointer;
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.gallery-image-btn:hover .gallery-image {
    transform: scale(1.06);
}

.gallery-hover {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    color: #fff;
    font-weight: 600;
    background: rgba(0, 0, 0, 0.35);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.gallery-image-btn:hover .gallery-hover {
    opacity: 1;
}

/* Informasi Foto */
.gallery-info {
    padding: 16px 18px;
}

.gallery-info h5 {
    color: #172033;
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 8px;
}

.gallery-info p {
    color: #8992a2;
    font-size: 12px;
    margin: 0;
}

/* Modal Galeri */
.gallery-modal .modal-content {
    border: none;
    border-radius: 14px;
    overflow: hidden;
}

.gallery-modal .modal-body {
    padding: 0;
}

.gallery-modal-image {
    width: 100%;
    height: 100%;
    max-height: 75vh;
    object-fit: contain;
    background: #111;
}

.gallery-modal-info {
    padding: 28px;
}

.gallery-modal-info h4 {
    font-weight: 700;
    color: #172033;
    overflow-wrap: anywhere;
}

.gallery-modal-date {
    font-size: 13px;
    color: #8992a2;
}

/* Responsif */
@media (max-width: 767px) {
    .gallery-image-btn {
        height: 230px;
    }

    .gallery-modal-image {
        max-height: 45vh;
    }

    .gallery-modal-info {
        padding: 20px;
    }
}
    </style>
</head>
<!-- Menggunakan Flexbox Layout untuk mengunci Sticky Footer -->
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
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

    <!-- Header Galeri -->
    <section class="pt-5 mt-5 pb-4 bg-white border-bottom">
        <div class="container pt-4 text-center">
            <h1 class="fw-bold text-uppercase" style="letter-spacing: -0.5px; color: #0f172a;">GALERI KEGIATAN SEKOLAH</h1>
            <p class="text-muted col-md-8 mx-auto small mb-0">
                Kumpulan dokumentasi kegiatan serta momen-momen penting di lingkungan SMK Negeri 4 Kota Bogor.
            </p>
        </div>
    </section>

    
<!-- Grid Galeri -->
<section class="py-5 flex-grow-1">
    <div class="container">
        <div class="row g-4">

            @forelse($galeris ?? $galeri ?? [] as $g)
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">

                        <!-- Foto -->
                        <button type="button"
                            class="gallery-image-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#galleryModal"
                            data-image="{{ asset('storage/' . $g->foto) }}"
                            data-title="{{ $g->nama_tempat }}"
                            data-date="{{ $g->created_at ? $g->created_at->format('d F Y') : '-' }}"
                            aria-label="Lihat {{ $g->nama_tempat }}">

                            <img
                                src="{{ asset('storage/' . $g->foto) }}"
                                alt="{{ $g->nama_tempat }}"
                                class="gallery-image">

                            <div class="gallery-hover">
                                <i class="bi bi-arrows-fullscreen"></i>
                                <span>Lihat Foto</span>
                            </div>
                        </button>

                        <!-- Informasi di bawah foto -->
                        <div class="gallery-info">
                            <h5>{{ $g->nama_tempat }}</h5>

                            <p>
                                <i class="bi bi-calendar3 me-1"></i>
                                {{ $g->created_at ? $g->created_at->format('d F Y') : '-' }}
                            </p>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <i class="bi bi-images fs-1 text-muted d-block mb-2"></i>
                    <p class="text-muted fw-semibold">
                        Belum ada galeri foto yang diunggah.
                    </p>
                </div>
            @endforelse

        </div>
    </div>
</section>


<!-- Modal Detail Galeri -->
<div class="modal fade gallery-modal" id="galleryModal"
     tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row g-0">

                    <!-- Foto Besar -->
                    <div class="col-md-7 bg-dark d-flex align-items-center justify-content-center">
                        <img src=""
                             id="modalGalleryImage"
                             class="gallery-modal-image"
                             alt="Foto galeri">
                    </div>

                    <!-- Informasi Foto -->
                    <div class="col-md-5 position-relative">
                        <button type="button"
                                class="btn-close position-absolute top-0 end-0 m-3"
                                data-bs-dismiss="modal"
                                aria-label="Tutup">
                        </button>

                        <div class="gallery-modal-info">
                            <div class="d-flex align-items-center gap-2 mb-4">
                                <img src="{{ asset('images/logo-smkn4.svg') }}"
                                     alt="Logo SMKN 4 Bogor"
                                     width="38"
                                     height="38">

                                <div>
                                    <div class="fw-bold small">
                                        SMKN 4 Kota Bogor
                                    </div>
                                    <div class="text-muted"
                                         style="font-size: 11px;">
                                        Galeri Kegiatan
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <h4 id="modalGalleryTitle" class="mb-3"></h4>

                            <p class="gallery-modal-date mb-3">
                                <i class="bi bi-calendar3 me-1"></i>
                                <span id="modalGalleryDate"></span>
                            </p>

                            <p class="text-muted small">
                                Dokumentasi kegiatan dan momen
                                di lingkungan SMKN 4 Kota Bogor.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


    <!-- Footer (Otomatis terkunci rapat di batas paling bawah) -->
    <footer class="bg-dark text-white pt-5 pb-4 mt-auto">
        <div class="container text-center text-md-start">
            <div class="row g-4">

                <!-- Kolom 1: Profil Sekolah & Logo -->
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="{{ asset('images/logo-smkn4.svg') }}" alt="Logo SMKN 4 Bogor" height="45">
                        <h5 class="fw-bold text-white mb-0">SMKN 4 KOTA BOGOR</h5>
                    </div>
                    <p class="text-secondary small leading-relaxed">
                        Mencetak generasi unggul dalam teknologi, berkarakter, dan siap bersaing di masa depan melalui pendidikan kejuruan yang berkualitas.
                    </p>
                    <!-- Sosmed Icons -->
                    <div class="d-flex gap-3 mt-3">
                        <a href="https://www.facebook.com/smknegeri4bogor/?locale=id_ID" class="text-white bg-secondary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center text-decoration-none" style="width: 38px; height: 38px;">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/smkn4kotabogor/" class="text-white bg-secondary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center text-decoration-none" style="width: 38px; height: 38px;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@smknegeri4bogor905" class="text-white bg-secondary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center text-decoration-none" style="width: 38px; height: 38px;">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Kolom 2: Navigasi Cepat -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold text-uppercase mb-3 text-primary">Navigasi</h6>
                    <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                        <li><a href="{{ url('/') }}#Beranda" class="text-secondary text-decoration-none">Beranda</a></li>
                        <li><a href="#tentang" class="text-secondary text-decoration-none">Tentang Sekolah</a></li>
                        <li><a href="#Berita" class="text-secondary text-decoration-none">Berita Sekolah</a></li>
                        <li><a href="#jurusan" class="text-secondary text-decoration-none">Program Keahlian</a></li>
                        <li><a href="#galeri" class="text-secondary text-decoration-none">Galeri</a></li>
                    </ul>
                </div>

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
                            <span>+62 0858 9021 3624</span>
                        </li>
                        <li class="d-flex gap-2 align-items-center">
                            <i class="bi bi-envelope-fill text-primary"></i>
                            <span>info@smkn4bogor.sch.id</span>
                        </li>
                    </ul>
                </div>

            </div>

            <hr class="border-secondary my-4 opacity-25">

            <!-- Bottom Copyright -->
            <div class="row align-items-center small text-secondary">
                <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                    &copy; {{ date('Y') }} SMKN 4 Kota Bogor. All rights reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <span>Dikembangkan oleh <strong class="text-white">Tim FrameProject</strong></span>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const galleryModal = document.getElementById('galleryModal');

    galleryModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;

        const image = button.getAttribute('data-image');
        const title = button.getAttribute('data-title');
        const date = button.getAttribute('data-date');

        document.getElementById('modalGalleryImage').src = image;
        document.getElementById('modalGalleryTitle').textContent = title;
        document.getElementById('modalGalleryDate').textContent = date;
    });

    galleryModal.addEventListener('hidden.bs.modal', function () {
        document.getElementById('modalGalleryImage').src = '';
    });
});
</script>
</body>
</html>