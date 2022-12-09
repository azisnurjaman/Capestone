@extends('layouts.landing.index')

@section('report')
<section id="report" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="{{ asset('template/landing/img/catreport.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Lapor Kucing Terlantar</h3><br>
                <form action="{{ route('laporan.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="nama" class="form-control" id="name" placeholder="Nama" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="alamat" id="address" placeholder="Alamat" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="keterangan" rows="5" placeholder="Keterangan" required></textarea>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-md col-md-12" onclick="return confirm('Apa anda yakin untuk mengirim pesan tersebut?')">Kirim Pesan</button>
                    </div>
                    <hr>
                </form>
            </div>

        </div>
    </div>

    </div>
</section>
@endsection

@section('lokasi')
<section id="lokasi" class="features">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <h2><b>Lokasi</b></h2>
            <div class="image col-lg-6" style="background-image: url('{{ asset('template/landing/img/lokasi.jpg')}}');" data-aos="fade-right">
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
</section>
@endsection

@section('service')
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

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-user"></i></div>
                    <h4><a href="">Adopsi</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">Edukasi</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection

@section('kontak')
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
</section>
@endsection