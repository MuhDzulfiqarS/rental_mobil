@extends('layout.main')

@section('judul')
Peminjaman Mobil
@endsection

@section('subjudul')
Form Peminjaman Mobil
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
    <form action="{{ route('peminjaman_mobil.store') }}" method="POST">
        @csrf
        <h5 class="card-title">Formulir Peminjaman Mobil</h5>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12" style="margin-top: 15px;">
                            <label class="form-label">Tanggal Mulai<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" id="tanggal_mulai">
                                @error('tanggal_mulai')
                                <div class="invalid-feedback" id="invalidCheck3Feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 15px;">
                            <label class="form-label">Tanggal Selesai<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="date" class="form-control @error('tanggal_selesai') is-invalid @enderror" name="tanggal_selesai" id="tanggal_selesai">
                                @error('tanggal_selesai')
                                <div class="invalid-feedback" id="invalidCheck3Feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12" style=" margin-top:15px;">
                            <label for="inputText" class="form-label">Merek</label>
                            <div class="input-group">
                                <input type="text" class="form-control" readonly value="" name="merek" placeholder="Merek" disabled>
                            </div>
                        </div>
                        <div class="col-md-12" style=" margin-top:15px;">
                            <label for="inputText" class="form-label">Model</label>
                            <div class="input-group">
                                <input type="text" class="form-control" readonly value="" name="model" placeholder="Model" disabled>
                            </div>
                        </div>
                        <div class="col-md-12" style=" margin-top:15px;">
                            <label for="inputText" class="form-label">Tarif Per Hari</label>
                            <div class="input-group">
                                <input type="text" class="form-control" readonly value="" name="tarif_per_hari" placeholder="Tarif Per Hari" disabled>
                            </div>
                        </div>

                        <div class="col-md-12" style=" margin-top:15px;">
                            <label for="inputText" class="form-label">Nomor Plat</label>
                            <div class="input-group">
                                <input type="text" class="form-control" readonly value="" name="nomor_plat" placeholder="Nomor Plat" disabled>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top:15px;">
                            <label for="inputText" class="form-label">Gambar Mobil</label>
                            <div class="input-group">
                                <img id="gambarMobil" src="" alt="Gambar Mobil" style="width: 200px; height: auto; display: none;">
                            </div>
                        </div>
                        
                        
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalmobil" style=" margin-top:15px;">
                            Cari Mobil
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Mobil -->
        <div class="modal fade" id="modalmobil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalmobilLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Data Mobil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table id="data_mobil" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Merek</th>
                                        <th>Model</th>
                                        <th>Tarif Per Hari</th>
                                        <th>Nomor Plat</th>
                                        <th>Status</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="data_mobil_id" id="data_mobil_id" value="">


        <div class="row" style="margin-top: 20px;">
            <div class="col-12 d-flex justify-content-end">
                <a href="javascript:history.back()" class="btn btn-outline-secondary mr-2" style="margin-right: 10px;">
                    <i class="fa-solid fa-backward"></i><span> Kembali</span>
                </a>
                <button type="submit" name="submit" value="Save" class="btn btn-success"> <i class="fa-solid fa-floppy-disk"></i> Simpan</button>
            </div>
        </div>
    </form>

    <script type="text/javascript">
        $(document).ready(function() {
 
            $('#data_mobil').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('peminjaman_mobil') }}",
                    data: function (d) {
                        d.type = 'mobil'; 
                    }
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'merek', name: 'merek'},
                    {data: 'model', name: 'model'},
                    {data: 'tarif_per_hari', name: 'tarif_per_hari'},
                    {data: 'nomor_plat', name: 'nomor_plat'},
                    {data: 'status', name: 'status', render: function(data, type, row, meta) {
                        if (data === "Tersedia") {
                            return '<span class="badge bg-success">Tersedia</span>';
                        } else if (data === "Terpakai") {
                            return '<span class="badge bg-danger">Terpakai</span>';
                        } else {
                            return data;
                        }
                    }},
                    { data: 'gambar', name: 'gambar', render: function(data, type, full, meta) {
                        return data ? '<img src="' + data + '" style="max-width:200px; max-height:200px;">' : 'Foto belum di upload';
                    }},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            $('#data_mobil tbody').on('click', '.pilih-mobil', function() {
                var mobilId = $(this).data('id'); 
                var merek = $(this).data('merek');
                var model = $(this).data('model');
                var nomorplat = $(this).data('nomorplat');
                var tarifperhari = $(this).data('tarifperhari');
                var gambar = $(this).data('gambar');
    
                $('input[name="merek"]').val(merek);
                $('input[name="model"]').val(model);
                $('input[name="nomor_plat"]').val(nomorplat);
                $('input[name="tarif_per_hari"]').val(tarifperhari);
                $('input[name="data_mobil_id"]').val(mobilId); 
                if (gambar) {
                    $('#gambarMobil').attr('src', gambar).show();
                } else {
                    $('#gambarMobil').hide();
                }

                $('#modalmobil').modal('hide');
            });
        });
    </script>

@if(session('mobil_unavailable'))
    <script>
        swal({
            icon: 'warning',
            title: 'Pemberitahuan!!',
            text: '{{ session('mobil_unavailable') }}',
            showConfirmButton: false,
            timer: 3000
        });
    </script>
@endif

@endsection