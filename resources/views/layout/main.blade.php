<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RentCar - Studio Fikar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  

  <!-- Tables Boostrap 5 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="{{ asset ('assets1/js/main.js') }}"></script>
 <!-- Toastr -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- Favicons -->
  <link href="{{ asset('assets1/img/logo.png')}}" rel="icon">
  <link href="{{ asset('assets1/img/logo.png')}}" rel="apple-touch-icon">
  
  <script src="https://kit.fontawesome.com/d51e822db9.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('assets1/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets1/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets1/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets1/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets1/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets1/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets1/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset ('assets1/css/style.css') }}" rel="stylesheet">
  <link rel="{{ asset ('fontawesome/css/all.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a  class="logo d-flex align-items-center">
        <img src="{{ asset ('assets/img/logo.png') }}" alt="">
        <span class="d-none d-lg-block"></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->



        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset ('assets1/img/profile-user.png') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ $user->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Selamat Datang</h6>
              <span>{{ $user->name }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('logout') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      @include('layout.menu')
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>
        @yield('judul')
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
          <li class="breadcrumb-item active">
          @yield('judul')
          </li>
          <li class="breadcrumb-item active">
          @yield('subjudul')
          </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    {{-- @include('komponen.pesan') --}}
    @yield('isi')
      
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Muhammad Dzulfiqar Syaifullah</span></strong>. All Rights Reserved
    </div>
    <div class="credits">

      Designed by <a>Muhammad Dzulfiqar Syaifullah</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('assets1/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset ('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('assets1/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset ('assets1/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset ('assets1/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset ('assets1/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset ('assets1/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset ('assets1/vendor/php-email-form/validate.js') }}"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset ('assets1/js/main.js') }}"></script>

@if (Session::has('success'))
<script>
  toastr.options = {
    'closeButton'       => true,
        'closeClass'        => 'toast-close-button',
        'closeDuration'     => 300,
        'closeEasing'       => 'swing',
        'closeHtml'         => '<button><i class="icon-off"></i></button>',
        'closeMethod'       => 'fadeOut',
        'closeOnHover'      => true,
        'containerId'       => 'toast-container',
        'debug'             => false,
        'escapeHtml'        => false,
        'extendedTimeOut'   => 10000,
        'hideDuration'      => 1000,
        'hideEasing'        => 'linear',
        'hideMethod'        => 'fadeOut',
        'iconClass'         => 'toast-info',
        'iconClasses'       => [
            'error'   => 'toast-error',
            'info'    => 'toast-info',
            'success' => 'toast-success',
            'warning' => 'toast-warning',
        ],
        'messageClass'      => 'toast-message',
        'newestOnTop'       => false,
        'onHidden'          => null,
        'onShown'           => null,
        'positionClass'     => 'toast-top-right',
        'preventDuplicates' => true,
        'progressBar'       => true,
        'progressClass'     => 'toast-progress',
        'rtl'               => false,
        'showDuration'      => 300,
        'showEasing'        => 'swing',
        'showMethod'        => 'fadeIn',
        'tapToDismiss'      => true,
        'target'            => 'body',
        'timeOut'           => 5000,
        'titleClass'        => 'toast-title',
        'toastClass'        => 'toast',
  }
  toastr.success(" {{ Session::get('success') }} ");
</script>  
@endif

<script>
  @if (session('success_tambah_data'))
      swal({
          icon: 'success',
          title: 'Berhasil',
          text: 'Berhasil Menambahkan Data',
          showConfirmButton: false,
          timer: 2000
      });
  @endif
</script>

<script>
  @if (session('success_update_data'))
      swal({
          icon: 'success',
          title: 'Berhasil',
          text: 'Berhasil Mengupdate Data',
          showConfirmButton: false,
          timer: 2000
      });
  @endif
</script>

<script>
  @if (session('success_delete_data'))
      swal({
          icon: 'success',
          title: 'Berhasil',
          text: 'Berhasil Menghapus Data',
          showConfirmButton: false,
          timer: 2000
      });
  @endif
</script>

<script>
  @if (session('success_tambah_peminjaman'))
      swal({
          icon: 'success',
          title: 'Berhasil',
          text: 'Berhasil Melakukan Peminjaman Mobil',
          showConfirmButton: false,
          timer: 2000
      });
  @endif
</script>

<script>
  @if (session('success_tambah_pengembalian'))
      swal({
          icon: 'success',
          title: 'Berhasil',
          text: 'Berhasil Melakukan Pengembalian Mobil',
          showConfirmButton: false,
          timer: 2000
      });
  @endif
</script>

</body>

</html>