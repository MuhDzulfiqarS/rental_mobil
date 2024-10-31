@extends('layout.main')

@section('judul')
Dashboard
@endsection

@section('isi')

<section id="dashboardmobil" class="dashboardmobil section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Rental Mobil - Studio Fikar</h2>
        <div><span></span> <span class="description-title">Mobil yang tersedia</span></div>
    </div>

    <div class="container">
  
        <form method="GET" action="{{ url('home_user') }}">
            <div class="row">

                <div class="col-md-3" >
                    <label>Filter Merek:</label>
                    <select name="merek" class="form-control">
                        <option value="">Semua Merek</option>
                        <option value="Toyota" {{ request('merek') == 'Toyota' ? 'selected' : '' }}>Toyota</option>
                        <option value="Honda" {{ request('merek') == 'Honda' ? 'selected' : '' }}>Honda</option>
                        <option value="Mitsubishi" {{ request('merek') == 'Mitsubishi' ? 'selected' : '' }}>Mitsubishi</option>
                        <option value="Suzuki" {{ request('merek') == 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
                    </select>
                </div>

                <div class="col-md-3" >
                    <label>Filter Model:</label>
                    <select name="model" class="form-control">
                        <option value="">Semua Model</option>
                        <option value="Fortuner" {{ request('model') == 'Fortuner' ? 'selected' : '' }}>Fortuner</option>
                        <option value="Innova" {{ request('model') == 'Innova' ? 'selected' : '' }}>Innova</option>
                        <option value="Avanza" {{ request('model') == 'Avanza' ? 'selected' : '' }}>Avanza</option>
                        <option value="Agya" {{ request('model') == 'Agya' ? 'selected' : '' }}>Agya</option>
                        <option value="Calya" {{ request('model') == 'Calya' ? 'selected' : '' }}>Calya</option>
                        <option value="Honda Jazz" {{ request('model') == 'Honda Jazz' ? 'selected' : '' }}>Honda Jazz</option>
                        <option value="HRV" {{ request('model') == 'HRV' ? 'selected' : '' }}>HRV</option>
                        <option value="Mobilio" {{ request('model') == 'Mobilio' ? 'selected' : '' }}>Mobilio</option>
                        <option value="Brio" {{ request('model') == 'Brio' ? 'selected' : '' }}>Brio</option>
                        <option value="Xpander" {{ request('model') == 'Xpander' ? 'selected' : '' }}>Xpander</option>
                        <option value="Ertiga" {{ request('model') == 'Ertiga' ? 'selected' : '' }}>Ertiga</option>
                        <option value="Yaris" {{ request('model') == 'Yaris' ? 'selected' : '' }}>Yaris</option>
                    </select>
                </div>

                <div class="col-md-3" style="margin-top: 23px; margin-bottom: 20px;">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i>  Cari</button>
                </div>
            </div>
        </form>

        <div class="row">
            @foreach($mobilTersedia as $mobil)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="mobil-item">
                    <img src="{{ asset($mobil->gambar) }}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="category">{{ $mobil->status }}</p>
                            <p class="price">Rp {{ number_format($mobil->tarif_per_hari, 0, ',', '.') }} / hari</p>
                        </div>
                        <h3><a href="course-details.html">{{ $mobil->merek }}</a></h3>
                        <p class="description">{{ $mobil->model }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@if(session('mobil_tidakada'))
<script>
    swal({
        icon: 'warning',
        title: 'Data Tidak Ditemukan',
        text: '{{ session('mobil_tidakada') }}',
        showConfirmButton: false,
        timer: 2000
    });
</script>
@endif


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

      
