<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SDN 1 Tegalurung - Fasilitas</title> {{-- Judul diubah sedikit agar lebih spesifik --}}
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    {{-- Menggunakan path yang benar: public/assets/img/favicon.ico --}}
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Menggunakan path yang benar: public/assets/lib/... --}}
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    {{-- Menggunakan path yang benar: public/assets/css/... --}}
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Menggunakan path yang benar: public/assets/css/... --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <nav
        class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
      >
        {{-- CATATAN: Ganti href dengan route('nama.route.index') atau url('/') --}}
        <a href="index.html" class="navbar-brand">
          <h1 class="m-0 text-primary">
            <i class="fa fa-school me-3"></i>SDN 1 TEGALURUNG
          </h1>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav mx-auto">
            {{-- CATATAN: Ganti href dengan route() atau url() --}}
            <a href="index.html" class="nav-item nav-link ">Beranda</a>
            <a href="about.html" class="nav-item nav-link">Tentang Kami</a>
            <div class="nav-item dropdown">
              {{-- CATATAN: href="#" biasanya OK untuk dropdown toggle --}}
              <a
                href="#"
                class="nav-link dropdown-toggle active" {{-- Aktif karena ini halaman fasilitas --}}
                data-bs-toggle="dropdown"
                >Halaman</a
              >
              <div
                class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0"
              >
                {{-- CATATAN: Ganti href dengan route('nama.route.fasilitas') atau url('/fasilitas') --}}
                <a href="facility.html" class="dropdown-item active" {{-- Aktif karena ini halaman fasilitas --}}
                  >Fasilitas Sekolah</a
                >
                 {{-- CATATAN: Ganti href dengan route('nama.route.guru') atau url('/guru') --}}
                <a href="team.html" class="dropdown-item">Guru</a>

                 {{-- CATATAN: Ganti href dengan route('nama.route.404') atau url('/404') (jika ada) --}}
                <a href="404.html" class="dropdown-item">404 Error</a>
              </div>
            </div>
             {{-- CATATAN: Ganti href dengan route('nama.route.kontak') atau url('/hubungi-kami') --}}
            <a href="contact.html" class="nav-item nav-link">Hubungi Kami</a>
          </div>
           {{-- CATATAN: Ganti href="" dengan route() atau url() ke halaman portal --}}
          <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block"
            >PORTAL<i class="fa fa-arrow-right ms-3"></i
          ></a>
        </div>
      </nav>
        {{-- Jika ada background image di sini, gunakan asset() seperti: style="background-image: url({{ asset('assets/img/header-fasilitas.jpg') }})" --}}
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Fasilitas</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        {{-- CATATAN: Ganti href="#" dengan link yang sesuai, misal route('nama.route.index') --}}
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        {{-- CATATAN: Ganti href="#" dengan link yang sesuai --}}
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Facilities</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-xxl py-5">
            <div class="container">
              <div
                class="text-center mx-auto mb-5 wow fadeInUp"
                data-wow-delay="0.1s"
                style="max-width: 600px"
              >
                <h1 class="mb-3">Fasilitas Sekolah</h1>
                <p>
                  "Mewujudkan siswa berakhlak mulia mandiri, inovatif, bernalar
                  kritis dan gotong-royong"
                </p>
              </div>
              <div class="row g-4">
                 {{-- Data fasilitas ini idealnya diambil dari database/controller --}}
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="facility-item">
                    <div class="facility-icon bg-success">
                      <span class="bg-success"></span>
                      <i class="fa fa-futbol fa-3x text-success"></i>
                      <span class="bg-success"></span>
                    </div>
                    <div class="facility-text bg-success">
                      <h3 class="text-success mb-3">Lapangan</h3>
                      <p class="mb-0">Lapangan yang luas</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="facility-item">
                    <div class="facility-icon bg-warning">
                      <span class="bg-warning"></span>
                      <i class="fa fa-book fa-3x text-warning"></i>
                      <span class="bg-warning"></span>
                    </div>
                    <div class="facility-text bg-warning">
                      <h3 class="text-warning mb-3">Perpustakaan</h3>
                      <p class="mb-0">
                        Perpustakaan untuk menunjang kebutuhan literasi
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                  <div class="facility-item">
                    <div class="facility-icon bg-info">
                      <span class="bg-info"></span>
                      <i class="fa fa-chalkboard-teacher fa-3x text-info"></i>
                      <span class="bg-info"></span>
                    </div>
                    <div class="facility-text bg-info">
                      <h3 class="text-info mb-3">Pembelajaran yang Positive</h3>
                      <p class="mb-0">
                        Diskusi merupakan sebuah ruang untuk berdialektika
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div
        class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h3 class="text-white mb-4">Hubungi Kami</h3> {{-- Judul disamakan --}}
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i> J9VG+829, Tegalurung, Kec. Balongan, Kabupaten Indramayu, Jawa Barat 45217
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>+6285123456789 {{-- Ganti nomor asli --}}
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>info@sdn1tegalurung.sch.id {{-- Ganti email asli --}}
              </p>
              <div class="d-flex pt-2">
                 {{-- CATATAN: Isi href="" dengan link sosial media yang benar --}}
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-linkedin-in"></i {{-- Mungkin tidak relevan? --}}
                ></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h3 class="text-white mb-4">Tautan Cepat</h3> {{-- Judul disamakan --}}
              {{-- CATATAN: Ganti href="" dengan route() atau url() --}}
              <a class="btn btn-link text-white-50" href="">Tentang Kami</a>
              <a class="btn btn-link text-white-50" href="">Kontak kami</a>
              <a class="btn btn-link text-white-50" href="">Fasilitas</a> {{-- Sesuaikan --}}
              <a class="btn btn-link text-white-50" href="">Kebijakan Privasi</a> {{-- Sesuaikan --}}
              <a class="btn btn-link text-white-50" href=""
                >Syarat & Ketentuan</a {{-- Sesuaikan --}}
              >
            </div>
            <div class="col-lg-3 col-md-6">
              <h3 class="text-white mb-4">Galeri Foto</h3> {{-- Judul disamakan --}}
              <div class="row g-2 pt-2">
                 {{-- Data galeri ini idealnya diambil dari database/controller --}}
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    {{-- Menggunakan path yang benar: public/assets/img/... --}}
                    src="{{ asset('assets/img/kelas_kosong_1.jpg') }}"
                    alt="Ruang Kelas Kosong" {{-- Tambahkan alt text deskriptif --}}
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="{{ asset('assets/img/kelas_kosong_2.jpg') }}"
                    alt="Ruang Kelas Kosong Lain"
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="{{ asset('assets/img/suasana_kelas_1.jpg') }}"
                    alt="Suasana Belajar di Kelas"
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="{{ asset('assets/img/tentang.jpg') }}"
                    alt="Foto Tentang Sekolah"
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="{{ asset('assets/img/tentang-2.jpg') }}"
                    alt="Foto Lain Tentang Sekolah"
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="{{ asset('assets/img/Poto_kelas_belajar_mengajar.jpg') }}"
                    alt="Kegiatan Belajar Mengajar"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                 {{-- CATATAN: Ganti href="#" dengan link yang sesuai, misal url('/') --}}
                &copy; <a class="border-bottom" href="#">SDN1TEGALURUNG</a>, All
                Right Reserved.

                Designed By
                <a class="border-bottom" href="https://htmlcodex.com"
                  >Hasan Maulana Ainulyaqin</a
                >
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                   {{-- CATATAN: Ganti href="" dengan route() atau url() --}}
                  <a href="">Home</a>
                  <a href="">Cookies</a> {{-- Sesuaikan --}}
                  <a href="">Help</a> {{-- Sesuaikan --}}
                  <a href="">FQAs</a> {{-- Sesuaikan --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        {{-- CATATAN: href="#" biasanya OK untuk back to top --}}
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    {{-- CDN Scripts tidak perlu asset() --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Local Scripts menggunakan asset() dengan path yang benar --}}
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    {{-- Menggunakan path yang benar: public/assets/js/... --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>