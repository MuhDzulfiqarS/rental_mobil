@extends('layout.main')

@section('judul')
Data Mobil
@endsection

@section('isi')
<a href="data_mobil/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i><span>    Tambah Data</span></a>

<div class="row">
    <div class="col-md-3" style="margin-top: 15px;">
        <label for="filter_merek">Filter Merek:</label>
        <select id="filter_merek" class="form-control">
            <option value="">Semua Merek</option>
            <option value="Toyota">Toyota</option>
            <option value="Honda">Honda</option>
            <option value="Mitsubishi">Mitsubishi</option>
            <option value="Suzuki">Suzuki</option>
        </select>
    </div>
    <div class="col-md-3" style="margin-top: 15px;">
        <label for="filter_model">Filter Model:</label>
        <select id="filter_model" class="form-control">
            <option value="">Semua Model</option>
            <option value="Fortuner">Fortuner</option>
            <option value="Innova">Innova</option>
            <option value="Avanza">Avanza</option>
            <option value="Agya">Agya</option>
            <option value="Calya">Calya</option>
            <option value="Honda Jazz">Honda Jazz</option>
            <option value="HRV">HRV</option>
            <option value="Mobilio">Mobilio</option>
            <option value="Brio">Brio</option>
            <option value="Xpander">Xpander</option>
            <option value="Ertiga">Ertiga</option>
            <option value="Yaris">Yaris</option>
        </select>
    </div>
    <div class="col-md-3" style="margin-top: 15px;">
        <label for="filter_status">Filter Status:</label>
        <select id="filter_status" class="form-control">
            <option value="">Semua Status</option>
            <option value="Tersedia">Tersedia</option>
            <option value="Terpakai">Terpakai</option>
        </select>
    </div>
    <div class="col-md">
        
        <div class="table-responsive">
            <h1 class="card-title">Data Mobil</h1>
            <table id="data_mobil" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Merek</th>
                        <th>Model</th>
                        <th>Nomor Plat</th>
                        <th>Tarif Per Hari</th>
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
</div>

<script>
    $(document).ready(function() {
    
     var table = $('#data_mobil').DataTable({
         processing: true,
         serverSide: true,
         ajax: {
             url: "{{ route('data_mobil') }}",
             data: function (d) {
                 d.merek = $('#filter_merek').val();
                 d.model = $('#filter_model').val();
                 d.status = $('#filter_status').val();
             }
         },
         order: [[8, 'desc']], 
         columns: [
             { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
             { data: 'merek', name: 'merek' },
             { data: 'model', name: 'model' },
             { data: 'nomor_plat', name: 'nomor_plat' },
             { data: 'tarif_per_hari', name: 'tarif_per_hari' },
             { data: 'status', name: 'status' },
             { data: 'gambar', name: 'gambar', render: function(data, type, full, meta) {
                 return data ? '<img src="' + data + '" style="max-width:200px; max-height:200px;">' : 'Foto belum di upload';
             }},
             { data: 'action', name: 'action' },
             { data: 'created_at', name: 'created_at', visible: false } 
         ]
     });
 
     $('#filter_merek, #filter_model, #filter_status').change(function() {
         table.draw();
     });
 
     $('#data_mobil').on('click', '.delete-button', function(e) {
         e.preventDefault();
         var id = $(this).data('id');
 
         swal({
             title: "Apakah anda yakin?",
             text: "Anda Akan menghapus data mobil ini!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willDelete) => {
             if (willDelete) {
         
                 $.ajax({
                     url: "{{ url('data_mobil') }}/" + id, 
                     type: 'DELETE',
                     data: {
                         "_token": "{{ csrf_token() }}"
                     },
                     success: function(response) {
                         swal(response.success, {
                             icon: "success",
                         })
                         .then((result) => {
                             table.draw(); 
                         });
                     }
                 });
             } else {
                 swal("Data tidak jadi dihapus");
             }
         });
     });
 });
 </script>
 
@endsection