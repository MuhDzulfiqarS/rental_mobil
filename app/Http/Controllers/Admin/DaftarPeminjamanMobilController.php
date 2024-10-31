<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_mobil;
use App\Models\Data_peminjaman_mobil;
use Illuminate\Support\Facades\Auth;
use DataTables;

class DaftarPeminjamanMobilController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
     
            $data = Data_peminjaman_mobil::select('*');
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('nama_penyewa', function ($data_peminjaman_mobils) {
                    return $data_peminjaman_mobils->user->name ?? '';
                })
                ->addColumn('alamat_penyewa', function ($data_peminjaman_mobils) {
                    return $data_peminjaman_mobils->user->alamat ?? '';
                })
                ->addColumn('merek', function ($data_peminjaman_mobils) {
                    return $data_peminjaman_mobils->data_mobil->merek ?? '';
                })
                ->addColumn('model', function ($data_peminjaman_mobils) {
                    return $data_peminjaman_mobils->data_mobil->model ?? '';
                })
                ->addColumn('nomor_plat', function ($data_peminjaman_mobils) {
                    return $data_peminjaman_mobils->data_mobil->nomor_plat ?? '';
                })
                ->addColumn('gambar', function ($data_peminjaman_mobils) {
                    return $data_peminjaman_mobils->data_mobil->gambar ?? '';
                })

                ->toJson();
        }
    
        return view('admin.layout_daftar_sewa.index')->with([
            'user' => Auth::user(),
        ]);
    }
}
