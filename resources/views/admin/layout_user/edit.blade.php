@extends('layout.main')

@section('judul')
Edit Data User
@endsection

@section('subjudul')
Formulir Mengedit Data User
@endsection

@section('isi')

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Formulir Mengedit Data User</h5>
            <!-- Form Data User -->
            <form action="/data_user/{{$user->id}}" method="POST">
            @csrf
            @method('put')
            <div class="col-md-12">
                <label class="form-label">Nama</label>
                <div class="input-group">
                <input type="text" class="form-control" value="{{$user->name}}" name="name"> 
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 15px;">
                <label class="form-label">Nomor Telepon</label>
                <div class="input-group">
                <input type="text" class="form-control" value="{{$user->no_telp}}" name="no_telp"> 
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 15px;">
                <label class="form-label">Alamat</label>
                <div class="input-group">
                <input type="text" class="form-control" value="{{$user->alamat}}" name="alamat"> 
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 15px;">
                <label class="form-label">Username <span class="text-danger">*</span></label>
                <div class="input-group">
                <input type="text" class="form-control @error('username')
                is-invalid
                @enderror" value="{{$user->username}}" name="username"> 
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
                <input type="text" class="form-control @error('password')
                is-invalid
                @enderror" value="{{$user->pass_view}}" name="password"> 
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
                    <select class="form-select @error('level') is-invalid @enderror" aria-label="Default select example" value="{{$user->level}}" name="level">
                    <option value="">Pilih Level</option>
                    <option value="1" @if ($user->level == "1") selected @endif>1</option>
                    <option value="2"@if ($user->level == "2") selected @endif>2</option>
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

            </form><!-- Form Data User -->

        </div>

    </div>
</section>
@endsection


