<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>{{ config('app.name', 'Cat Patron') }}</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- {{ asset('vendor/bootstrap/css/bootstrap.min.css') }} -->
<!-- Favicons -->
<link href="{{ asset('img/favicon.png') }}" rel="icon">
<link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
<div class="container d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="#">CATPATRON<span>.</span></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
        <li><a class="nav-link scrollto" href="#report">Lapor</a></li>
        <li><a class="nav-link scrollto " href="#lokasi">Lokasi</a></li>
        <li class="dropdown"><a href="#program"><span>Program</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
            <li><a href="#">Donasi</a></li>
            <li><a href="#">Adopsi</a></li>
            <li><a href="#">Edukasi</a></li>
        </ul>
        </li>
        <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->

    <a href="#about" class="get-started-btn scrollto">Admin</a>

</div>
</header>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
    <div class="col-xl-6 col-lg-8">
        <h1>Kucing Terlantar Butuh Bantuanmu<span>.</span></h1>
        <h2>Ayo beraksi nyata untuk membantu mereka!</h2>
    </div>
    </div>
</div>
</section>
<!-- End Hero -->

<main id="main">

<!-- ======= Report Section ======= -->
<section id="report" class="about">
    <div class="container" data-aos="fade-up">

    <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="{{ asset('img/catreport.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
        <h3>Lapor Kucing Terlantar</h3><br>
        <form action="" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
            </div>
            </div>
            <div class="form-group mt-3">
            <input type="text" class="form-control" name="address" id="address" placeholder="Alamat" required>
            </div>
            <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5"
                placeholder="Warna Kucing, Kondisi, Titik Ditemukannya kucing" required></textarea>
            </div><br><br>
            <div class="text-center"><button type="submit" class="btn btn-primary">Kirim Pesan</button></div>
        </form>
        </div>

    </div>
    </div>

    </div>
</section>
<br><br>
<!-- End Report Section -->

<!-- ======= Lokasi Section ======= -->
<section id="lokasi" class="features">
    <div class="container" data-aos="fade-up">

    <div class="row">
        <h2><b>Lokasi</b></h2>
        <div class="image col-lg-6" style="background-image: url('{{ asset('img/lokasi.jpg')}}');" data-aos="fade-right">
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-home"></i>
            <h4>Cimahi</h4>
            <p>Hubungi kami jika Anda tinggal atau bekerja di Depok dan dapat membantu dalam kegiatan TNR, monitoring
            dan streetfeeding.</p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-home"></i>
            <h4>Kebon Jati</h4>
            <p>Hubungi kami jika Anda tinggal atau bekerja di Depok dan dapat membantu dalam kegiatan TNR, monitoring
            dan streetfeeding.</p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-home"></i>
            <h4>Cibiru</h4>
            <p>Hubungi kami jika Anda tinggal atau bekerja di Depok dan dapat membantu dalam kegiatan TNR, monitoring
            dan streetfeeding.</p>
        </div>
        </div>
    </div>
    </div>
</section><!-- End Features Section -->

<!-- ======= Services Section ======= -->
<section id="program" class="services">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Program</h2>
        <p>Cek Program Kami</p>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
            <div class="icon"><i class="bx bx-box"></i></div>
            <h4><a href="">Donasi</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
        data-aos-delay="200">
        <div class="icon-box">
            <div class="icon"><i class="bx bx-user"></i></div>
            <h4><a href="">Adopsi</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
        data-aos-delay="300">
        <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Edukasi</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
        </div>

    </div>

    </div>
</section>
<!-- End Program Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Kontak</h2>
        <p>Kontak Kami</p>
    </div>

    <div class="row mt-5">

        <div class="col-lg-4">
        <div class="info">
            <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Lokasi:</h4>
            <p></p>
            </div>

            <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info.catpatron@example.com</p>
            </div>

            <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Telepon:</h4>
            <p></p>
            </div>

        </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
            </div>
            </div>
            <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
            </div>
            <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
            </div>
            <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Pesanmu telah terkirim. Terima kasih!</div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
        </form>

        </div>

    </div>

    </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
<div class="footer-top">
    <div class="container">
    <div class="row">

        <div class="col-lg-3 col-md-6">
        <div class="footer-info">
            <h3>CatPatron<span>.</span></h3>
            <p>
            <br><br><br>
            <strong>Phone:</strong><br>
            <strong>Email:</strong> info.catpatron@example.com<br>
            </p>
            <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
        <h4>Tautan</h4>
        <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#home">Beranda</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#report">Lapor</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#lokasi">Lokasi</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#program">Program</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Kontak</a></li>
        </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
        <h4>Program Kami</h4>
        <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#program">Donasi</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#program">Adopsi</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#program">Edukasi</a></li>
        </ul>
        </div>

    </div>
    </div>
</div>

<div class="container">
    <div class="copyright">
    &copy; Copyright <strong><span>CatPatron</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    Designed by Capstone Grup C22-236
    </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.j') }}"></script>
<script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('/js/main.js') }}"></script>

</body>

</html>