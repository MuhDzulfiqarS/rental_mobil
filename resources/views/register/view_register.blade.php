<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RentCar - Studio Fikar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets1/img/logo.png')}}" rel="icon">
  <link href="{{ asset('assets1/img/logo.png')}}" rel="apple-touch-icon">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets1/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets1/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets1/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets1/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset('assets1/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset('assets1/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('assets1/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets1/css/style.css')}}" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

  <main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        
                        <div class="d-flex justify-content-center py-4">
                            <a href="" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('assets/img/logo.png')}}" alt="">
                                <span class="d-none d-lg-block"></span>
                            </a>
                        </div>
        
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                                    <p class="text-center small">Masukkan detail pribadi Anda untuk membuat akun</p>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
        
                                <form action="{{ url('register/proses') }}" method="post" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <div class="col-12">
                                        <label for="nama" class="form-label">Nama Anda</label>
                                        <input type="text" name="name" class="form-control" id="nama" value="{{ old('name') }}" required>
                                        <div class="invalid-feedback">Silakan masukkan nama Anda!</div>
                                    </div>
        
                                    <div class="col-12">
                                        <label for="alamat" class="form-label">Alamat Anda</label>
                                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ old('alamat') }}" required>
                                        <div class="invalid-feedback">Silakan masukkan alamat Anda!</div>
                                    </div>
        
                                    <div class="col-12">
                                        <label for="no_telp" class="form-label">No Telp Anda</label>
                                        <input type="text" name="no_telp" class="form-control" id="no_telp" value="{{ old('no_telp') }}" required>
                                        <div class="invalid-feedback">Silakan masukkan nomor telepon Anda!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="nomor_sim" class="form-label">Nomor SIM Anda</label>
                                        <input type="text" name="nomor_sim" class="form-control" id="nomor_sim" value="{{ old('nomor_sim') }}" required>
                                        <div class="invalid-feedback">Silakan masukkan nomor SIM Anda!</div>
                                    </div>
        
                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user"></i></span>
                                            <input type="text" name="username" class="form-control" id="yourUsername" value="{{ old('username') }}" required>
                                            <div class="invalid-feedback">Silakan masukkan username Anda!</div>
                                        </div>
                                    </div>
        
                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                                        <div class="invalid-feedback">Silakan masukkan password Anda!</div>
                                        <p style="font-size: 12px;">Password minimal 6 karakter</p>

                                    </div>
        
                                    <div class="col-12">
                                        <button class="btn w-100" type="submit" style="background-color: #ffc700; color: #fff;">Buat Akun</button>
                                    </div>
        
                                    <div class="col-12">
                                        <p class="small mb-0">Sudah punya akun? <a href="{{ url('login') }}">Log in</a></p>
                                    </div>
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
  <script src="{{ asset('assets1/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets1/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset('assets1/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('assets1/vendor/quill/quill.js')}}"></script>
  <script src="{{ asset('assets1/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('assets1/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('assets1/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets1/js/main.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</body>

</html>