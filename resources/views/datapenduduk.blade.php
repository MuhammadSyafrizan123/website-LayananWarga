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
        <h1>Data Penduduk</h1>
      
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
<a class="nav-link " href="{{ route('datapenduduk') }}">
  <i class="bi bi-people-fill"></i>
  <span>Data Penduduk</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link collapsed" href="{{ route('status') }}">
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
      <h1>Data Penduduk</h1>
      <nav>
        <p></p>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="col-xl col-md">
        <div class="row">

          <div class="card">
            <div class="card-body pt-3">
                <div class="tab-pane fade show active datapenduduk-kk1" id="datapenduduk-kk1">
                  <h5 class="card-title">List Data Penduduk</h5>
                  <p class="small fst-italic"></p>
                  
                  
                  <div class="text-start">
                    <a class="btn btn-primary" href="{{ route('tambahdata') }}">Tambah Data</a>
                    <a class="btn btn-secondary" href="{{ route('exportpdf') }}">Export PDF</a>
                    <div class="row g-3 align-items-center mt-2">
                  </div>
                  
                  

                  <p> </p>
                            <div class="table-responsive">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead class="table-white align-items-center">
                              
                                  <tr>
                                    <th width="40px" scope="col">No</th>
                                    <th width="300px" scope="col">Nama Lengkap</th>
                                    <th width="200px" scope="col">Jenis Kelamin</th>
                                    <th width="250px" scope="col">NIK</th>
                                    <th width="200px" scope="col">No KK</th>
                                    <th width="250px" scope="col">Pekerjaan</th>
                                    <th width="200px" scope="col">Alamat Rumah</th>
                                    <th width="150px" scope="col">RT / RW</th>
                                    <th width="250px" scope="col">No Hp</th>
                                    <th width="450px" scope="col">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @php
  $id=1;
  @endphp
                                  @foreach ($data as $index=> $row)
                                  <tr>
                                    <th class="number" scope="row">{{ $index + $data->firstItem()}}</th>
                                      <td>{{ $row -> nama_lengkap}}</td>
                                    <td>{{ $row -> jenis_kelamin}}</td>
                                    <td>{{ $row -> no_nik}}</td>
                                    <td>{{ $row -> no_kk}}</td>
                                    <td>{{ $row -> pekerjaan}}</td>
                                    <td>{{ $row -> alamat}}</td>
                                    <td>{{ $row -> rt}} / {{ $row -> rw}}</td>
                                    <td>{{ $row -> no_hp}}</td>
                                    <td>
                                    <div class="text-start">
                                    <a href="/tampilkandata/{{ $row -> id}}" type="button" class="btn btn-primary">Edit</button>
                                    <a type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#verticalycentered">Hapus</a>
                                    <div class="modal fade" id="verticalycentered" tabindex="-1">
                                      <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Penghapusan Data</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                      Apakah anda yakin ingin menghapus data ini?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                      <a href="/delete/{{ $row -> id}}" type="submit" class="btn btn-primary">Saya Yakin</a>
                                    </div>
                                  </div>
                                </div>
                              </div><!-- End Vertically centered Modal-->
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    </td>
                                    
                                    
                                  </tr>
                                  @endforeach                  
                                </tbody>
                          </table>
                        {{ $data->links() }}
                </div>
               </div><!--END KK 1 DATA TABLE-->

                
            </div>
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
    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>

</html>