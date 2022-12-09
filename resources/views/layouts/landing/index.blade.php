<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'Cat Patron') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- {{ asset('template/landing/vendor/bootstrap/css/bootstrap.min.css') }} -->
    <!-- Favicons -->
    <link href="{{ asset('template/landing/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('template/landing/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/landing/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template/landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/landing/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/landing/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/landing/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('template/landing/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/toastr/build/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/toastr/build/toastr.css') }}">
    <!-- Template Main CSS File -->
    <link href="{{ asset('template/landing/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    @include('layouts.landing.header')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @include('layouts.landing.hero')
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Report Section ======= -->
        @yield('report')
        <!-- End Report Section -->

        <!-- ======= Lokasi Section ======= -->
        @yield('lokasi')
        <!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        @yield('service')
        <!-- End Program Section -->

        <!-- ======= Contact Section ======= -->
        @yield('kontak')
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.landing.footer')
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('template/landing/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('template/landing/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('template/landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/landing/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('template/landing/vendor/isotope-layout/isotope.pkgd.min.j') }}"></script>
    <script src="{{ asset('template/landing/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('template/landing/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('template/landing/js/main.js') }}"></script>
    <script src="{{asset('assets/toastr/toastr.js')}}"></script>
    @include('layouts.flash.flash')
</body>

</html>