@extends('layout.main')

@section('judul')
Daftar Mobil Disewa
@endsection

@section('isi')

<div class="row">
    <div class="col-md">
        <div class="table-responsive">
        <h1 class="card-title">Daftar Mobil Disewa</h1>
    <table id="data_peminjaman_mobil" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Merek Mobil </th>
                <th>Model Mobil </th>
                <th>Nomor Plat Mobil</th>
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
    $('#data_peminjaman_mobil').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('daftar_sewa') }}",
        order: [[5, 'desc']], 
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'tanggal_mulai', name: 'tanggal_mulai' },
            { data: 'tanggal_selesai', name: 'tanggal_selesai' },
            { data: 'merek', name: 'merek' },
            { data: 'model', name: 'model' },
            { data: 'nomor_plat', name: 'nomor_plat' },
            { data: 'gambar', name: 'gambar', render: function(data, type, full, meta) {
                return data ? '<img src="' + data + '" style="max-width:200px; max-height:200px;">' : 'Foto belum di upload';
            }},
            { data: 'action', name: 'action' },
            { data: 'created_at', name: 'created_at', visible: false } 
        ]
    });

     $('#data_peminjaman_mobil').on('click', '.delete-button', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            swal({
                    title: "Apakah anda yakin?",
                    text: "Anda Akan menghapus data daftar sewa ini!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "{{ route('daftar_sewa.destroy', '') }}" + '/' + id,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            swal(response.success,{
                                icon: "success",
                            })
                            .then((result) => {
                                location.reload();
                            });
                        }
                    });
                }else{
                    swal("Data tidak jadi dihapus");
                }
            });
        });
    });
</script>
@endsection