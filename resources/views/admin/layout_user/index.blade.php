@extends('layout.main')

@section('judul')
Data User
@endsection

@section('isi')
<a href="data_user/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i><span>    Tambah Data</span></a>

<div class="row">
    <div class="col-md">
        <div class="table-responsive">
        <h1 class="card-title">Data User</h1>
    <table id="data_user" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Nomor SIM</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
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
    $('#data_user').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('data_user') }}",
        order: [[9, 'desc']], 
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'name', name: 'name' },
            { data: 'no_telp', name: 'no_telp' },
            { data: 'alamat', name: 'alamat' },
            { data: 'nomor_sim', name: 'nomor_sim' },
            { data: 'username', name: 'username' },
            { data: 'pass_view', name: 'pass_view' },
            { data: 'level', name: 'level' },
            { data: 'action', name: 'action' },
            { data: 'created_at', name: 'created_at', visible: false } 
        ]
    });

     $('#data_user').on('click', '.delete-button', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            swal({
                    title: "Apakah anda yakin?",
                    text: "Anda Akan menghapus data user ini!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "{{ route('data_user.destroy', '') }}" + '/' + id,
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