@extends('layout.main')

@section('judul')
Form Pengembalian Mobil
@endsection

@section('isi')

<form id="form-pengembalian" action="{{ route('pengembalian_mobil.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nomor_plat">Nomor Plat Mobil:</label>
        <input type="text" class="form-control" id="nomor_plat" name="nomor_plat" required>
        <button type="button" class="btn btn-info mt-2" id="cek-detail">Cek Detail Penyewaan</button>
        <button type="submit" class="btn btn-success mt-2"><i class="fa-solid fa-floppy-disk"></i> Simpan Data dan Kembalikan Mobil</button>
    </div>

    <div id="detail-penyewaan" style="display: none; margin-top:15px;">
        <h4>Detail Penyewaan</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Deskripsi</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Durasi Hari</td>
                    <td id="durasi_hari"></td>
                </tr>
                <tr>
                    <td>Total Biaya</td>
                    <td>Rp <span id="total_biaya"></span></td>
                </tr>
                <tr>
                    <td>Tanggal Pengembalian</td>
                    <td id="tanggal_pengembalian"></td>
                </tr>
                <tr>
                    <td>Merek Mobil</td>
                    <td id="merek_mobil"></td>
                </tr>
                <tr>
                    <td>Model Mobil</td>
                    <td id="model_mobil"></td>
                </tr>
                <tr>
                    <td>Nomor Plat</td>
                    <td id="nomor_plat_mobil"></td>
                </tr>
                <tr>
                    <td>Tarif per Hari</td>
                    <td>Rp <span id="tarif_per_hari"></span></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><img id="gambar_mobil" src="" alt="Gambar Mobil" style="width: 100px;"></td>
                </tr>
            </tbody>
        </table>
    </div>

</form>

<script>
    document.getElementById('cek-detail').addEventListener('click', function() {
        const nomorPlat = document.getElementById('nomor_plat').value;
    
        fetch("{{ route('pengembalian_mobil.check') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ nomor_plat: nomorPlat })
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert(data.error);
            } else {
                document.getElementById('detail-penyewaan').style.display = 'block';
                document.getElementById('durasi_hari').textContent = data.durasi_hari;
                document.getElementById('total_biaya').textContent = data.total_biaya;
                document.getElementById('tanggal_pengembalian').textContent = data.tanggal_pengembalian;
    
                // Set data mobil
                document.getElementById('merek_mobil').textContent = data.mobil.merek;
                document.getElementById('model_mobil').textContent = data.mobil.model;
                document.getElementById('nomor_plat_mobil').textContent = data.mobil.nomor_plat;
                document.getElementById('tarif_per_hari').textContent = data.mobil.tarif_per_hari;
                document.getElementById('gambar_mobil').src =  data.mobil.gambar;
            }
        })
        .catch(error => console.error('Error:', error));
    });
    </script>


@endsection
