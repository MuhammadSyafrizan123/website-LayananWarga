<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Masuk ke Akun : LAWAR</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('dashboard_asset/assets/img/layar-icon.png')}}" rel="icon">
    <link href="{{asset('dashboard/assets/img/layar-touch-icon.png')}}" rel="apple-touch-icon">



    <!-- Vendor CSS Files -->
    <link href="{{asset('loginregist/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('loginregist/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('loginregist/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('loginregist/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('loginregist/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('loginregist/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('loginregist/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('loginregist/assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">



                            <div class="card mb-1" style="width: 430px;">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title">Masuk</h5>

                                    </div>

                                    <form method="POST" action="{{ route('login') }}">
                                        <form class="row g-3 needs-validation" novalidate>
                                            @csrf

                                            <div class="col-12">
                                                <label for="yourNoHp" class="form-label">Masukkan No Telepon</label>
                                                <div class="input-group has-validation">
                                                    <input type="no_hp" name="no_hp" class="form-control" id="no_hp" required>
                                                    <div class="invalid-feedback">Masukkan No Telepon dengan benar!</div>
                                                    <input-error :messages="$errors->get('yourNoHp')" class="from-control" />
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="yourPassword" class="form-label">Kata Sandi</label>
                                                <input type="password" name="password" class="form-control" id="password" required>
                                                <div class="invalid-feedback">Masukkan Kata Sandi dengan benar!</div>

                                            </div>

                                            <div class="col-12">
                                                <div class="form-check">
                                                    <p></p>
                                                    <input class="form-check-input" name="remember" type="checkbox" value="" id="acceptTerms">
                                                    <h2 class="form-check-label" for="remember_me" name="remember">Ingat Saya</h2>
                                                    <div class="invalid-feedback" name="remember"></div>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <button class="btn btn-primary w-100" type="submit" style="height: 45px;">Masuk</button>
                                                
                                            </div>
                                            <div class="col-12">

                                                <h3 class="mini-title-down">Belum Memiliki Akun? <a href="{{ route('register') }}">Daftar Sekarang</a></h3>
                                            </div>
                                        </form>
                                    </form>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('loginregist/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('loginregist/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('loginregist/assets/vendor/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('loginregist/assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('loginregist/assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('loginregist/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('loginregist/assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('loginregist/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('loginregist/assets/js/main.js')}}"></script>

</body>

</html>