@extends('layout.main')

@section('judul')
Edit Data Mobil
@endsection

@section('subjudul')
Formulir Mengedit Data Mobil
@endsection

@section('isi')

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Formulir Mengedit Data Mobil</h5>
            <!-- Form Data Mobil -->
            <form action="/data_mobil/{{$data_mobil->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="col-md-12" style="margin-top: 15px;">
                <label class="col-sm-2 col-form-label">Merek</label>
                <div class="input-group">
                  <select class="form-select" aria-label="Default select example" value="{{$data_mobil->merek}}" name="merek">
                    <option value="">Pilih Merek</option>
                    <option value="Toyota" @if ($data_mobil->merek == "Toyota") selected @endif>Toyota</option>
                    <option value="Honda"@if ($data_mobil->merek == "Honda") selected @endif>Honda</option>
                    <option value="Mitsubishi"@if ($data_mobil->merek == "Mitsubishi") selected @endif>Mitsubishi</option>
                    <option value="Suzuki"@if ($data_mobil->merek == "Suzuki") selected @endif>Suzuki</option>
                  </select>
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 15px;">
                <label class="col-sm-2 col-form-label">Model</label>
                <div class="input-group">
                  <select class="form-select" aria-label="Default select example" value="{{$data_mobil->model}}" name="model">
                    <option value="">Pilih Model</option>
                    <option value="Fortuner" @if ($data_mobil->model == "Fortuner") selected @endif>Fortuner</option>
                    <option value="Innova"@if ($data_mobil->model == "Innova") selected @endif>Innova</option>
                    <option value="Avanza"@if ($data_mobil->model == "Avanza") selected @endif>Avanza</option>
                    <option value="Agya"@if ($data_mobil->model == "Agya") selected @endif>Agya</option>
                    <option value="Calya"@if ($data_mobil->model == "Calya") selected @endif>Calya</option>
                    <option value="Honda Jazz"@if ($data_mobil->model == "Honda Jazz") selected @endif>Honda Jazz</option>
                    <option value="HRV"@if ($data_mobil->model == "HRV") selected @endif>HRV</option>
                    <option value="Mobilio"@if ($data_mobil->model == "Mobilio") selected @endif>Mobilio</option>
                    <option value="Brio"@if ($data_mobil->model == "Brio") selected @endif>Brio</option>
                    <option value="Pajero"@if ($data_mobil->model == "Pajero") selected @endif>Pajero</option>
                    <option value="Xpander"@if ($data_mobil->model == "Xpander") selected @endif>Xpander</option>
                    <option value="Ertiga"@if ($data_mobil->model == "Ertiga") selected @endif>Ertiga</option>
                    <option value="Yaris"@if ($data_mobil->model == "Yaris") selected @endif>Yaris</option>
                  </select>
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 15px;">
                <label class="form-label">Nomor Plat</label>
                <div class="input-group">
                <input type="text" class="form-control" value="{{$data_mobil->nomor_plat}}" name="nomor_plat"> 
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 15px;">
                <label class="form-label">Tarif Per Hari</label>
                <div class="input-group">
                <input type="text" class="form-control" value="{{$data_mobil->tarif_per_hari}}" name="tarif_per_hari"> 
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 15px;">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="input-group">
                  <select class="form-select" aria-label="Default select example" value="{{$data_mobil->status}}" name="status">
                    <option value="">Pilih Status</option>
                    <option value="Tersedia" @if ($data_mobil->status == "Tersedia") selected @endif>Tersedia</option>
                    <option value="Terpakai"@if ($data_mobil->status == "Terpakai") selected @endif>Terpakai</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3" style="margin-top: 15px;">
                <label for="inputText" class="col-sm-2 col-form-label">Gambar Saat Ini</label>
                <div class="col-sm-10">
                    @if($data_mobil->gambar)
                    <img src="{{ asset($data_mobil->gambar) }}" alt="Gambar Objek Wisata" style="max-width: 200px;">
                    @else
                        <p>Gambar belum diupload</p>
                    @endif
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Upload Gambar Baru</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="gambar"> 
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

            </form><!-- Form Data data mobil -->

        </div>

    </div>
</section>
@endsection


