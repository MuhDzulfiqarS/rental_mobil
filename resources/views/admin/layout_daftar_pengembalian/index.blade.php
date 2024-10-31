@extends('layout.main')

@section('judul')
Daftar Pengembalian Mobil
@endsection

@section('isi')

<div class="row">
    <div class="col-md">
        <div class="table-responsive">
        <h1 class="card-title">Daftar Pengembalian Mobil</h1>
    <table id="data_pengembalian_mobil_admin" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Penyewa</th>
                <th>Alamat Penyewa</th>
                <th>Tanggal Pengembalian</th>
                <th>Durasi Hari</th>
                <th>Biaya Sewa</th>
                <th>Merek Mobil </th>
                <th>Model Mobil </th>
                <th>Nomor Plat Mobil</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        </table>
    </div>
    </div>
</div>

<script>
   $(document).ready(function() {
        $('#data_pengembalian_mobil_admin').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('daftar_pengembalian_mobil_admin') }}",
            order: [[10, 'desc']], 
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'nama_penyewa', name: 'nama_penyewa' },
                { data: 'alamat_penyewa', name: 'alamat_penyewa' },
                { data: 'tanggal_pengembalian', name: 'tanggal_pengembalian' },
                { data: 'durasi_hari', name: 'durasi_hari' },
                { data: 'total_biaya', name: 'total_biaya' },
                { data: 'merek', name: 'merek' },
                { data: 'model', name: 'model' },
                { data: 'nomor_plat', name: 'nomor_plat' },
                { data: 'gambar', name: 'gambar', render: function(data, type, full, meta) {
                    return data ? '<img src="' + data + '" style="max-width:200px; max-height:200px;">' : 'Foto belum di upload';
                }},
                { data: 'created_at', name: 'created_at', visible: false } 
            ]
        });

    
    });
</script>
@endsection