<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset ('template/admin/srtdash/assets/images/icon/logo.png') }}">
    <link rel="stylesheet" href="{{asset ('template/admin/srtdash/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset ('template/admin/srtdash/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset ('template/admin/srtdash/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{asset ('template/admin/srtdash/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{asset ('template/admin/srtdash/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset ('template/admin/srtdash/assets/css/slicknav.min.css') }}">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset ('template/admin/srtdash/assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{asset ('template/admin/srtdash/assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{asset ('template/admin/srtdash/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{asset ('template/admin/srtdash/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/toastr/build/toastr.css') }}">
</head>

<body class="body-bg">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
        <!-- main header area start -->
        @include('layouts.admin.header')
        <!-- main header area end -->

        <!-- navbar area start -->
        @include('layouts.admin.navbar')
        <!-- navbar area end -->

        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="container">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        @include('layouts.admin.footer')
        <!-- footer area end-->
    </div>
    <!-- main wrapper start -->
    <!-- offset area start -->
    <!-- <div class="offset-area">
        @yield('offset-area')
    </div> -->
    <!-- offset area end -->
    <!-- jquery latest version -->
    <!-- jquery latest version -->
    <script src="{{asset ('template/admin/srtdash/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset ('template/admin/srtdash/assets/js/popper.min.js') }}"></script>
    <script src="{{asset ('template/admin/srtdash/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{asset ('template/admin/srtdash/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset ('template/admin/srtdash/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{asset ('template/admin/srtdash/assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{asset ('template/admin/srtdash/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="{{asset ('template/admin/srtdash/assets/js/plugins.js') }}"></script>
    <script src="{{asset ('template/admin/srtdash/assets/js/scripts.js') }}"></script>
    <script src="{{asset ('assets/toastr/toastr.js') }}"></script>
    @include('layouts.flash.flash')
</body>

</html>