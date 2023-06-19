<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pengajuan : LAWAR</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('dashboard_asset/assets/img/layar-icon.png')}}" rel="icon">
    <link href="{{asset('dashboard/assets/img/layar-touch-icon.png')}}" rel="apple-touch-icon">


    <!-- Vendor CSS Files -->
    <link href="{{asset('dashboard_asset/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_asset/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_asset/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_asset/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_asset/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_asset/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_asset/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('dashboard_asset/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center-title justify-content-between title">
            <div class="pagetitle-header">
                <h1>Pengajuan</h1>

            </div><!-- End Page Title -->
        </div>

        <div class="d-flex align-items-center justify-content-between">
            <a class="logo d-flex align-items-center">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        </nav>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">



                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->



                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell-fill"></i>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" data-popper-placement="bottom-end" style="position: absolute;inset: 0px 0px auto auto;margin: 0px;transform: translate(-25px, 35px);width: 365px;">

                        <li class="dropdown-header">
                            <div class="notif-nama">Notifikasi</div>

                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Pengajuan Surat Anda telah berhasil!</h4>
                                <h3>Silahkan datang ke rumah RT setempat.</h3>
                                <p>01 November 2022</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Gotong Royong - 01 Nov 2022</h4>
                                <h3>Dilaksanakan di Fasum - Jam 08.00 WIB.</h3>
                                <p>25 Oktober 2022</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Pengajuan Surat Anda telah berhasil!</h4>
                                <h3>Silahkan datang ke rumah RT setempat.</h3>
                                <p>11 Oktober 2022</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->



                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{asset('dashboard_asset/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown ps-2">{{ Auth::user()->nama_lengkap }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

                        <li class="dropdown-header">
                            <img src="{{asset('dashboard_asset/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                            <p></p>
                            <h6>{{ Auth::user()->nama_lengkap }}</h6>
                            <span>Warga</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>


                        
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                       
                            
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>{{ __('Log Out') }}</span>
                                </a>
                            </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->


    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav " id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-logo">
                    <img src="{{asset('dashboard_asset/assets/img/layar-icon.png')}}" alt="">
                    <span class="nav-logo-text">LAWAR</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <p></p>


            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link " href="{{ route('pengajuan') }}">
                    <i class="bi bi-file-text-fill"></i>
                    <span>Pengajuan</span>
                </a>
            </li> <!-- End Blank Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('janjitemu') }}">
                    <i class="bi bi-people-fill"></i>
                    <span>Janji Temu</span>
                </a>
            </li><!-- End Profile Page Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('bantuan') }}">
                    <i class="bi bi-question-circle-fill"></i>
                    <span>Bantuan</span>
                </a>
            </li><!-- End Dashboard Nav -->

           


        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle-dasbor">
            <h1>Pengajuan</h1>
            <nav>
                <p></p>
            </nav>
        </div><!-- End Page Title -->


        <section class="section">
            <div class="col-xl col-md">
                <div class="row">



                    <!-- Default Card -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pengajuan Surat</h5>
                                <p></p>
                                <p>Jenis Pengajuan Surat</p>


                                <!-- General Form Elements -->
                                <form action="/insertdata" method="POST">
                                    @csrf

                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <select 
                                            class="form-select" aria-label="Default select example"name="tipe_surat" required>
                                                <option selected>Pilih Salah Satu...</option>
                                                <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
                                                <option value="Pembuatan KTP">Surat Pengantar Pembuatan KTP</option>
                                                <option value="Pembuatan KK">Surat Pengantar Pembuatan KK</option>
                                                <option value="Pembuatan Akte Kelahiran">Surat Pengantar Pembuatan Akte Kelahiran</option>
                                                <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                                                <option value="Perubahan Data">Surat Keterangan Perubahan Data</option>
                                                <option value="Surat Keterangan Pindah">Surat Pengantar Pindah</option>
                                                <option value="Surat Pengantar Nikah">Surat Pengantar Nikah</option>
                                                <option value="Surat Kematian">Surat Kematian</option>
                                                <option value="Pengantar Tidak Mampu">Surat Pengantar Tidak Mampu</option>
                                                <option value="Pembuatan SKCK">Surat Pengantar Pembuatan SKCK</option>
                                                <option value="Domisili Usaha">Surat Keterangan Domisili Usaha</option>
                                            </select>
                                        </div>
                                    </div>
                                    <form class="row g-3">
                                    <div class="col-md-12">
                                        <label for="inputNama5" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_lengkap" id="inputNama5" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputkelamin5" class="form-label">Jenis Kelamin</label>
                                        <select id="inputkelamin5" class="form-select" name="jenis_kelamin" required>
                                            <option selected>Pilih Salah Satu...</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputtempatlahir" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" id="inputtempatlahir5s" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputtgllahir" class="form-label">Tanggal Lahir</label>
                                        <div class="col-sm-12">
                                            <input type="date" class="form-control" name="tgl_lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputnik5" class="form-label">Nomor Induk Kependudukan (NIK)</label>
                                        <input type="text" class="form-control" placeholder="Masukkan NIK" name="no_nik"id="inputnik5s" required>
                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                        <label for="inputalamat5" class="form-label">Nomor Rumah</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" id="inputalamat5s" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputkewarganegaraan5" class="form-label" name="kewarganegaraan">Kewarganegaraan</label>
                                        <select id="inputkewarganegaraan5" class="form-select"name="kewarganegaraan" required>
                                            <option selected>Pilih Salah Satu...</option>
                                            <option value="Warga Negara Indonesia (WNI)">Warga Negara Indonesia (WNI)</option>
                                            <option value="Warga Negara Asing (WNA)">Warga Negara Asing (WNA)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputagama5" class="form-label" name="agama">Agama</label>
                                        <select id="inputagama5" class="form-select"name="agama" required>
                                            <option selected>Pilih Salah Satu...</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputpekerjaan5" class="form-label" name="pekerjaan" >Pekerjaan</label>
                                        <select id="inputpekerjaan5" class="form-select"name="pekerjaan" required >
                                            <option selected>Pilih Salah Satu...</option>
                                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                                            <option value="Pelajar / Mahasiswa">Pelajar / Mahasiswa</option>
                                            <option value="PNS / TNI / POLRI">PNS / TNI / POLRI</option>
                                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                                            <option value="Wiraswasta">Wiraswasta</option>
                                            <option value="Pedagang">Pedagang</option>
                                            <option value="Nelayan / Petani">Nelayan / Petani</option>
                                            <option value="Pekerja Lepas">Pekerja Lepas</option>
                                            <option value="Pensiunan">Pensiunan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputstatusperkawinan5" class="form-label" name="status_kawin">Status Perkawinan</label>
                                        <select id="inputstatusperkawinan5" class="form-select" name="status_kawin" required>
                                            <option selected>Pilih Salah Satu...</option>
                                            <option value="Belum Kawin">Belum Kawin</option>
                                            <option value="Sudah Kawin">Sudah Menikah</option>
                                            <option value="Duda">Duda</option>
                                            <option value="Janda">Janda</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Saya menyatakan bahwa semua data yang sudah input adalah benar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-pengajuan" style="width: 136px;">Ajukan Surat</button>
                                    </div>
                                </form><!-- End Multi Columns Form -->
                            </div>
                        </div>

                    </div>

                                    <p></p>

                                    
                            </div>


                            </form><!-- End General Form Elements -->
                        </div>
                    </div>

                </div>
                <!--End Jenis Surat-->

                
                </div>
        </section>

    </main><!-- End #main -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{asset('dashboard_asset/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('dashboard_asset/assets/js/main.js')}}"></script>


</body>

</html>