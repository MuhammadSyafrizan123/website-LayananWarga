<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Penduduk : LAWAR</title>
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
        <h1>Data Pengajuan Surat</h1>
      
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
                <div class="search-bar">
                    <form class="search-form d-flex align-items-center" action="/datapenduduk" method="GET">
                    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                    </form>
                </div>

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
                    @if(auth()->user()->isAdmin())
                        <li class="dropdown-header">
                            <img src="{{asset('dashboard_asset/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                            <p></p>
                            <h6>{{ Auth::user()->nama_lengkap }}</h6>
                            <span>Ketua RT</span>
                        </li>
                        @endif
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
        <a class="nav-link" href="{{ route('dashboard') }}">
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
        <a class="nav-link collapsed" href="{{ route('janjitemu') }}">
            <i class="bi bi-people-fill"></i>
            <span>Janji Temu</span>
        </a>
    </li><!-- End Profile Page Nav -->

   


    

    
    @endif

@if(auth()->user()->isAdmin())
        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard') }}">
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->
<li class="nav-item">
<a class="nav-link collapsed" href="{{ route('datapenduduk') }}">
  <i class="bi bi-people-fill"></i>
  <span>Data Penduduk</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link " href="{{ route('status') }}">
  <i class="bi bi-people-fill"></i>
  <span>Data Pengajuan Surat</span>
</a>
</li>

<li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('agenda') }}">
            <i class="bi bi-grid-fill"></i>
            <span>Agenda</span>
        </a>
    </li><!-- End Profile Page Nav -->
    
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
      <h1>Status</h1>
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
                  <h5 class="card-title">Status Pengajuan Surat</h5>
                  <p>Berikut status pengajuan surat Anda</p>

                  <!-- Default Table -->
                  
              <!-- Default Table -->
              <div class="table-responsive">
                <table class="table table-striped table-md align-items-center">
                  <thead class="table-white align-items-center">
                
                    <tr>
                      <th width="60px"scope="col">No</th>
                      <th width="300px" scope="col">Nama Lengkap</th>
                      <th width="250px" scope="col">Tanggal Pengajuan</th>
                      <th width="250px" scope="col">Jenis Surat</th>
                      
                      <th width="250px" scope="col">Aksi</th>
                   
                    </tr>
                  </thead>
                  
              <tbody>
              @foreach ($data as $key => $row)
                    <tr>
                    <td>{{ $key + 1 }}</td>
                      <td>{{$row -> nama_lengkap}}</td>
                      <td>{{$row -> created_at}}</td>
                      <td>{{$row -> tipe_surat}}</td>
                      <td> 
                        <a href="/lihatsuratpengajuan/{{$row -> id}}" type="button" class="btn btn-secondary btn-sm"> Lihat Dokumen</button>
                    </tr>
                    @endforeach
                    
                    
                    
                 
                   
                  </tbody>
            </table>
        </div>
        
          <!-- End Default Table Example -->
    </div>

        

        </div>
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