@extends('layout.main')

@section('judul')
Tambah Data User
@endsection

@section('subjudul')
Formulir Penambahan Data User
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
            <h5 class="card-title">Formulir Penambahan Data User</h5>
            <!-- Form User -->
            <form action="store" method="POST">
                @csrf

                <div class="col-md-12">
                    <label class="form-label">Nama <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control
                        @error('name')
                        is-invalid
                        @enderror" placeholder="Masukkan nama" name="name" id="name">
                        @error('name')
                        <div class="invalid-feedback" id="invalidCheck3Feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12" style="margin-top: 15px;">
                    <label class="form-label">Nomor Telepon <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control
                        @error('no_telp')
                        is-invalid
                        @enderror" placeholder="Masukkan nomor telepon" name="no_telp" id="no_telp">
                        @error('no_telp')
                        <div class="invalid-feedback" id="invalidCheck3Feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12" style="margin-top: 15px;">
                    <label class="form-label">Alamat <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control
                        @error('alamat')
                        is-invalid
                        @enderror" placeholder="Masukkan alamat" name="alamat" id="alamat">
                        @error('alamat')
                        <div class="invalid-feedback" id="invalidCheck3Feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12" style="margin-top: 15px;">
                    <label class="form-label">Nomor SIM <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control
                        @error('nomor_sim')
                        is-invalid
                        @enderror" placeholder="Masukkan nomor SIM" name="nomor_sim" id="nomor_sim"
                        pattern="\d*" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                        @error('nomor_sim')
                        <div class="invalid-feedback" id="invalidCheck3Feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12" style="margin-top: 15px;">
                    <label class="form-label">Username <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control
                        @error('username')
                        is-invalid
                        @enderror" placeholder="Masukkan username" name="username" id="username">
                        @error('username')
                        <div class="invalid-feedback" id="invalidCheck3Feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12" style="margin-top: 15px;">
                    <label class="form-label">Password <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control
                        @error('password')
                        is-invalid
                        @enderror" placeholder="Masukkan password" name="password" id="password">
                        @error('password')
                        <div class="invalid-feedback" id="invalidCheck3Feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12" style="margin-top: 15px;">
                    <label class="form-label">Level <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <select class="form-select
                      @error('level')
                      is-invalid
                     @enderror" aria-label="Default select example" name="level" id="level">
                        <option selected>Pilih Level</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                      </select>
                      @error('level')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                </div>

                
                <div class="row" style="margin-top: 20px;">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="javascript:history.back()" class="btn btn-outline-secondary mr-2" style="margin-right: 10px;">
                            <i class="fa-solid fa-backward"></i><span> Kembali</span>
                        </a>
                        <button type="submit" name="submit" value="Save" class="btn btn-success" > <i class="fa-solid fa-floppy-disk"></i>  Simpan</button>
                    </div>
                </div>
            </form><!-- Form User -->

        </div>
    </div>

</section>
  
@endsection