<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_mobil;
use App\Models\Data_peminjaman_mobil;
use App\Models\Data_pengembalian_mobil;
use Illuminate\Support\Facades\Auth;
use DataTables;

class DaftarPengembalianMobilController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
     
            $data = Data_pengembalian_mobil::select('*');
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('nama_penyewa', function ($data_pengembalian_mobils) {
                    return $data_pengembalian_mobils->user->name ?? '';
                })
                ->addColumn('alamat_penyewa', function ($data_pengembalian_mobils) {
                    return $data_pengembalian_mobils->user->alamat ?? '';
                })
                ->addColumn('merek', function ($data_pengembalian_mobils) {
                    return $data_pengembalian_mobils->data_mobil->merek ?? '';
                })
                ->addColumn('model', function ($data_pengembalian_mobils) {
                    return $data_pengembalian_mobils->data_mobil->model ?? '';
                })
                ->addColumn('nomor_plat', function ($data_pengembalian_mobils) {
                    return $data_pengembalian_mobils->data_mobil->nomor_plat ?? '';
                })
                ->addColumn('gambar', function ($data_pengembalian_mobils) {
                    return $data_pengembalian_mobils->data_mobil->gambar ?? '';
                })

                ->toJson();
        }
    
        return view('admin.layout_daftar_pengembalian.index')->with([
            'user' => Auth::user(),
        ]);
    }
}
