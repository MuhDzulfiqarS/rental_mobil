@extends('layout.main')

@section('judul')
{{ $user->name }}
@endsection

@section('isi')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Hello, {{ $user->name }}</h3>
  </div>
  <div class="card-body">
    <div class="alert alert-success">
      Selamat Datang di Sistem Rental Mobil - Studio Fikar
    </div>
  </div>
</div>

<section class="section dashboard">
  <div class="row">
    <div class="col-lg-8">
      <div class="row">
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Tersedia <span>| Mobil</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-car-on"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $totalMobilTersedia }}</h6>

                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Terpakai <span>| Mobil</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-car-rear"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $totalMobilTerpakai }}</h6>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@if(session('login_success'))
<script>
        swal({
            icon: 'success',
            title: 'Login Berhasil',
            text: 'Selamat datang kembali!',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif

@endsection

      
