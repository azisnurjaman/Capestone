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
        @role('admin')
            <a href="/admin/dashboard" class="get-started-btn scrollto">{{Auth::user()->name}}</a>
        @endrole
    </div>
</header>