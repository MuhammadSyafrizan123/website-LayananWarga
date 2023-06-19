<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LAWAR : Layanan Warga RT/RW </title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('home/assets/img/layar-icon.png')}}" rel="icon">
    <link href="{{asset('home/assets/img/layar-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('home/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('home/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('home/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('home/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('home/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('home/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('home/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{('/')}}" class="logo d-flex align-items-center">
                <img src="{{asset('home/assets/img/logo.png')}}" alt="">
                <span>LAWAR</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Profil</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Agenda</a></li>
                    <li><a class="nav-link scrollto" href="#footer">Tentang Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h6 data-aos="fade-up">Halo, Selamat Datang di</h6>
                    <h1 data-aos="fade-up">Layanan Warga RT / RW</h1>

                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{ route('login') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Masuk</span>
                            </a>
                            <a href="{{ route('register') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Daftar</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('home/assets/img/hero-img3.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Profil</h3>
                            <h2>Perumahan Tanjung Sengkuang</h2>
                            <p>
                                Perumahan Tanjung Sengkuang merupakan perumahan yang berada di Batam, Indonesia.
                                Perumahan Tanjung Sengkuang Batam memberikan lingkungan yang nyaman, aman, serta lokasi yang strategis. Dekat dengan pusat perbelanjaan, wisata dan hiburan di Kota Batam.
                            </p>
                            <audio controls src ="{{asset('home/assets/Audio/suara saya.mp3')}}"></audio>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5641.286585809283!2d104.01451931843997!3d1.1661191699045197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989fa51c94d49%3A0xaccc946b9675521d!2sBlk.%20F%2C%20Tj.%20Sengkuang%2C%20Kec.%20Batu%20Ampar%2C%20Kota%20Batam%2C%20Kepulauan%20Riau%2029444!5e0!3m2!1sid!2sid!4v1687074260056!5m2!1sid!2sid" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->





        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Layanan</h2>
                    <p>Layanan Pengajuan Surat Hanya Dengan 4 Langkah Mudah</p>
                </header>
                <div class="row gy-3">

                    <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-global-line icon"></i>
                            <h3>1. BUKA APLIKASI</h3>
                            <p>Ketik alamat domain pada browser anda</p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-user-add-line icon"></i>
                            <h3>2. BUAT AKUN</h3>
                            <p>Mulai registrasi akun di LAWAR dan lengkapi biodata anda</p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-send-plane-line icon"></i>
                            <h3>3. AJUKAN SURAT</h3>
                            <p>Mulai ajukan surat pengajuan di aplikasi</p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box purple">
                            <i class="ri-printer-line icon"></i>
                            <h3>4. SELESAI</h3>
                            <p>Pengajuan akan langsung diproses oleh Ketua RT / RW dan selesai.</p>

                        </div>

                    </div>

                </div>

            </div>


        </section><!-- End Services Section -->

            <div class="footer-newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <h4>Kegiatan Yang Akan Datang</h4>

                            <p></p>
                            <p></p>
                            <p>Minggu, 21 April 2023 - 18.15 WIB</p>
                            <h3>Berbuka Bersama Di RT 003</h3>
                        </div>

                    </div>
                </div>
            </div>



        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Agenda</h2>
                    <p>Foto - foto Kegiatan di Perumahan Tanjung Sengkuang</p>
                </header>
                

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">
                    @foreach ($data as $row)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                            
                                <div class="profile mt-auto">
                                    <img src="{{ asset('fotoagenda/'.$row->foto) }}" class="testimonial-img" alt="">
                                    <h3>{{$row -> namaagenda}}</h3>
                                </div>
                                <p>
                                {{$row -> keterangan}}
                                </p>

                            </div>
                        </div><!-- End testimonial item -->

                        @endforeach



                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->




    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <footer id="footer" class="footer">

            <div class="footer-top">
                <center>
                    <h2>Tentang Kami</h2>
                    <p></p>
                    <div class="container">
                        <div class="col-lg-5 col-md-12">
                            <h3>LAWAR atau Layanan Warga RT / RW adalah aplikasi web berbasis online yang bertujuan untuk memudahkan pengurusan RT seperti surat menyurat yang dibuat dengan mudah dimanapun dan kapanpun. </h3>
                            <p></p>
                            <lg>

                            </lg>

                            <a class="logo allign:center">

                                <img src="{{asset('home/assets/img/lyr_tagline.png')}}" alt="" />

                            </a>


                            <div class="social-links mt-3">
                                <a href="mailto: layananwarga12@gmail.com" class="email"><i class="bi bi-envelope-fill"></i> hubungi.lawar@gmail.com</a>
                                <p>

                                </p>
                                <a href="https://instagram.com/layananwarga?igshid=NTc4MTIwNjQ2YQ==" class="instagram"><i class="bi bi-instagram"></i> aplikasilawar</a>
                            </div>
                        </div>


                    </div>

                </center>
            </div>

            <div class="container">
                <div class="copyright">
                    2023 &copy; Designed and Developed by <strong><span>Tim Lawar</span></strong>.
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{asset('home/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
        <script src="{{asset('home/assets/vendor/aos/aos.js')}}"></script>
        <script src="{{asset('home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('home/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('home/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('home/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('home/assets/vendor/php-email-form/validate.js')}}"></script>


        <script src="{{asset('home/assets/js/main.js')}}"></script>

</body>

</html>