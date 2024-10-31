@extends('layout.main')

@section('judul')
Tambah Data Mobil
@endsection

@section('subjudul')
Formulir Penambahan Data Mobil
@endsection

@section('isi')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-warning  alert-dismissible fade show" style="background-color: #ffc700; color: white;" role="alert">
                <h4 class="alert-heading">Perhatian!!</h4>
                <p>1. Mohon pastikan bahwa seluruh data telah diisi dengan lengkap sebelum disimpan. Hal ini penting untuk memastikan kelengkapan informasi</p>
                <p>2.   Silakan gunakan tanda "-" pada kolom jika data tidak ada atau tidak tersedia.  Hal ini akan membantu memahami bahwa kolom tersebut sengaja kosong dan bukan karena kesalahan pengisian.</p>
                <hr>
                <p class="mb-0">Terima kasih atas perhatiannya dalam pengisian data   <i class="fa-solid fa-face-smile"></i></p>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Formulir Penambahan Data Mobil</h5>
            <!-- Form Mobil -->
            <form action="store" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12" style="margin-top: 15px;">
                    <label class="col-sm-2 required-label">Merek <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <select class="form-select
                      @error('merek')
                      is-invalid
                     @enderror" aria-label="Default select example" name="merek" id="merek">
                        <option selected>Pilih Merek</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Honda">Honda</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Suzuki">Suzuki</option>
                      </select>
                      @error('merek')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                </div>

                <div class="col-md-12" style="margin-top: 15px;">
                    <label class="col-sm-2 required-label">Model <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <select class="form-select
                      @error('model')
                      is-invalid
                     @enderror" aria-label="Default select example" name="model" id="model">
                        <option selected>Pilih Model</option>
                        <option value="Fortuner">Fortuner</option>
                        <option value="Innova">Innova</option>
                        <option value="Avanza">Avanza</option>
                        <option value="Agya">Agya</option>
                        <option value="Calya">Calya</option>
                        <option value="Honda Jazz">Honda Jazz</option>
                        <option value="HRV">HRV</option>
                        <option value="Mobilio">Mobilio</option>
                        <option value="Brio">Brio</option>
                        <option value="Pajero">Pajero</option>
                        <option value="Xpander">Xpander</option>
                        <option value="Ertiga">Ertiga</option>
                        <option value="Yaris">Yaris</option>
                      </select>
                      @error('model')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                </div>

                <div class="col-md-12" style="margin-top: 15px;">
                    <label class="form-label">Nomor Plat <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control
                        @error('nomor_plat')
                        is-invalid
                        @enderror" placeholder="Masukkan nomor plat" name="nomor_plat" id="nomor_plat">
                        @error('nomor_plat')
                        <div class="invalid-feedback" id="invalidCheck3Feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12" style="margin-top: 15px;">
                    <label class="form-label">Tarif Per Hari <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control
                        @error('tarif_per_hari')
                        is-invalid
                        @enderror" placeholder="Masukkan nomor plat" name="tarif_per_hari" id="tarif_per_hari"  pattern="\d*" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                        @error('tarif_per_hari')
                        <div class="invalid-feedback" id="invalidCheck3Feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12" style="margin-top: 15px;">
                    <label class="col-sm-2 required-label">Status <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <select class="form-select
                      @error('status')
                      is-invalid
                     @enderror" aria-label="Default select example" name="status" id="status">
                        <option selected>Pilih Status</option>
                        <option value="Tersedia">Tersedia</option>
                        <option value="Terpakai">Terpakai</option>
                      </select>
                      @error('status')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                </div>

                  <div class="col-md-12" style="margin-top: 15px;">
                    <label class="form-label">Upload Gambar Mobil <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar">
                       
                        @error('gambar')
                        <div class="invalid-feedback" id="invalidCheck3Feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <small class="form-text text-muted">Maksimal ukuran file 10MB</small>
                </div>

                
                <div class="row" style="margin-top: 20px;">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="javascript:history.back()" class="btn btn-outline-secondary mr-2" style="margin-right: 10px;">
                            <i class="fa-solid fa-backward"></i><span> Kembali</span>
                        </a>
                        <button type="submit" name="submit" value="Save" class="btn btn-success" > <i class="fa-solid fa-floppy-disk"></i>  Simpan</button>
                    </div>
                </div>
            </form><!-- Form Mobil -->

        </div>
    </div>

</section>
  
@endsection