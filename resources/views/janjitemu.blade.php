<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Janji Temu : LAWAR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
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
      <h1>Janji Temu</h1>
    
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
            <a href="#">Tampilkan Semua</a>
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

          <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>{{ __('Log Out') }}</span>
                                </a>
                            </li>
</form>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav " id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-logo">
            <img src="{{asset('dashboard_asset/assets/img/layar-icon.png')}}" alt="">
            <span class="nav-logo-text">LAWAR</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <p></p>
    @if(auth()->user()->isPengguna())
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard') }}">
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->



    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('pengajuan') }}">
            <i class="bi bi-file-text-fill"></i>
            <span>Pengajuan</span>
        </a>

    <li class="nav-item">
        <a class="nav-link " href="{{ route('janjitemu') }}">
            <i class="bi bi-people-fill"></i>
            <span>Janji Temu</span>
        </a>
    </li><!-- End Profile Page Nav -->


    

    
    @endif

@if(auth()->user()->isAdmin())
        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard') }}">
            <i class="bi bi-grid-fill"></i>
            <span>Dasbor</span>
        </a>
    </li><!-- End Dashboard Nav -->
<li class="nav-item">
<a class="nav-link collapsed" href="{{ route('datapenduduk') }}">
  <i class="bi bi-people-fill"></i>
  <span>Data Penduduk</span>
</a>
</li>
    
@endif
<li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('bantuan') }}">
            <i class="bi bi-question-circle-fill"></i>
            <span>Bantuan</span>
        </a>
    </li><!-- End Dashboard Nav -->


</aside><!-- End Sidebar-->
  
  <main id="main" class="main">
  
    <div class="pagetitle-dasbor">
      <h1>Janji Temu</h1>
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
                  <h5 class="card-title">Janji Temu RT / RW</h5>
                  <p>Daftar kontak yang dapat dihubungi</p>

                  <!-- Default Table -->
                  
                <div class="table-responsive">
                  <table class="table table-striped table-md align-items-center">
                    <thead class="table-white align-items-center">
                <thead>
                  <tr>
                    <th width="200px" scope="col">No</th>
                    <th width="250px" scope="col">Foto</th>
                    <th width="250px" scope="col">Nama</th>
                    <th width="250px" scope="col">Jabatan</th>
                    <th width="250px" scope="col">Alamat Rumah</th>
                    <th width="250px" scope="col">Nomor Whatsapp</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><img src="{{asset('dashboard_asset/assets/img/avatar 1.png')}}" class="profile-img-table"></td>
                    <td>Ashar Kholiq</td>
                    <td>Ketua RT. 003</td>
                    <td>Blok KK 5 No. 22</td>
                    <td> <a href=" https://wa.me/6285805335161?text=Saya%20ingin%20membuat%20janji%20temu%20bersama%20bapak/ibu.">
                      <button type="button"  class="btn btn-linked"><i class="bi bi-whatsapp"></i>   0858 0533 5161</button></a></td>

                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><img src="{{asset('dashboard_asset/assets/img/avatar 2.png')}}" class="profile-img-table"></td>
                    <td>Tarmidzi</td>
                    <td>Ketua RW. 012</td>
                    <td>Blok LL 2 No. 23</td>
                    <td> <a href=" https://wa.me/6282246373404?text=Saya%20ingin%20membuat%20janji%20temu%20bersama%20bapak/ibu.">
                      <button type="button"  class="btn btn-linked"><i class="bi bi-whatsapp"></i>   0822 4637 3484</button></a></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><img src="{{asset('dashboard_asset/assets/img/avatar 3.png')}}" class="profile-img-table"></td>
                    <td>Yoga Syahputra</td>
                    <td>Sekuriti</td>
                    <td>Blok KK 2 No. 23</td>
                    <td> <a href=" https://wa.me/6282178649880?text=Saya%20ingin%20membuat%20janji%20temu%20bersama%20bapak/ibu.">
                      <button type="button"  class="btn btn-linked"><i class="bi bi-whatsapp"></i>   0821-7864-9880</button></a></td>


                   
                  </tr>
               
                </tbody>
              </table>
              <!-- End Default Table Example -->

          </div>

        

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
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