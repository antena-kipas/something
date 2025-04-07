<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SDN 1 Tegalurung - Hubungi Kami</title> {{-- Judul diubah sesuai konten --}}
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

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
            <a href="index.html" class="nav-item nav-link">Beranda</a>
            <a href="about.html" class="nav-item nav-link">Tentang Kami</a>
            <div class="nav-item dropdown">
               {{-- CATATAN: href="#" OK untuk dropdown toggle --}}
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                >Halaman</a
              >
              <div
                class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0"
              >
                 {{-- CATATAN: Ganti href dengan route() atau url() --}}
                <a href="facility.html" class="dropdown-item"
                  >Fasilitas Sekolah</a
                >
                <a href="team.html" class="dropdown-item">Guru</a>
                <a href="404.html" class="dropdown-item">404 Error</a> {{-- Sesuaikan jika perlu --}}
              </div>
            </div>
             {{-- CATATAN: Ganti href dengan route('nama.route.kontak') atau url('/hubungi-kami') --}}
            <a href="contact.html" class="nav-item nav-link active">Hubungi Kami</a> {{-- Aktif karena ini halaman kontak --}}
          </div>
          {{-- CATATAN: Ganti href="" dengan route() atau url() ke halaman portal --}}
          <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block"
            >PORTAL<i class="fa fa-arrow-right ms-3"></i
          ></a>
        </div>
      </nav>
        {{-- Jika ada background image, gunakan asset() --}}
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Hubungi Kami</h1> {{-- Diubah ke Bahasa Indonesia --}}
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        {{-- CATATAN: Ganti href="#" dengan route('nama.route.index') atau url('/') --}}
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        {{-- CATATAN: Ganti href="#" dengan link yang sesuai (mungkin tidak perlu) --}}
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Hubungi Kami</li> {{-- Diubah ke Bahasa Indonesia --}}
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Saling Terhubung</h1>
                    <p>Kami Selalu terbuka dengan kritik dan saran yang membangun. Silakan hubungi kami melalui detail di bawah atau gunakan formulir kontak.</p> {{-- Teks disesuaikan sedikit --}}
                </div>
                <div class="row g-4 mb-5">
                    <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h6>J9VG+829, Tegalurung, Kec. Balongan, Kabupaten Indramayu, Jawa Barat 45217</h6>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-envelope-open fa-2x text-primary"></i>
                        </div>
                         {{-- CATATAN: Ganti dengan alamat email yang benar --}}
                        <h6>info@sdn1tegalurung.sch.id</h6>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                         {{-- CATATAN: Ganti dengan nomor telepon yang benar --}}
                        <h6>+6285123456789</h6>
                    </div>
                </div>
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                             {{-- CATATAN: Form ini perlu dihubungkan ke backend (Controller) untuk diproses --}}
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <form> {{-- Tambahkan method="POST" action="{{ route('nama.route.kirim.pesan') }}" jika sudah ada route --}}
                                    {{-- @csrf --}} {{-- Jangan lupa CSRF token untuk keamanan form Laravel --}}
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="name" name="name" placeholder="Nama Anda"> {{-- Tambah atribut name --}}
                                                <label for="name">Nama Anda</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="email" name="email" placeholder="Email Anda"> {{-- Tambah atribut name --}}
                                                <label for="email">Email Anda</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="subject" name="subject" placeholder="Subjek Pesan"> {{-- Tambah atribut name --}}
                                                <label for="subject">Subjek</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Tulis pesan Anda di sini" id="message" name="message" style="height: 100px"></textarea> {{-- Tambah atribut name --}}
                                                <label for="message">Pesan</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Kirim Pesan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                {{-- CATATAN: Pastikan URL src Google Maps ini valid dan lengkap. URL saat ini tidak valid. Dapatkan dari Google Maps Embed API. --}}
                                <iframe class="position-relative rounded w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2884106142606!2d108.3750949!3d-6.3567013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebef7452e9439%3A0xdc3b565a047ba1ce!2sSDN%20Tegalurung%20I!5e0!3m2!1sid!2sid!4v1744056220199!5m2!1sid!2sid"
                                frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                tabindex="0"></iframe>
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
                 {{-- Idealnya looping data galeri dari controller --}}
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="{{ asset('assets/img/kelas_kosong_1.jpg') }}"
                    alt="Ruang Kelas Kosong"
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
             {{-- Kolom Newsletter bisa ditambahkan jika perlu --}}
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                 {{-- CATATAN: Ganti href="#" dengan link yang sesuai, misal url('/') --}}
                © <a class="border-bottom" href="#">SDN1TEGALURUNG</a>, All
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
        {{-- CATATAN: href="#" OK untuk back to top --}}
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

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>