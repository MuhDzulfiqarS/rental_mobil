<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_mobil;
use App\Models\Data_peminjaman_mobil;
use Illuminate\Support\Facades\Auth;
use DataTables;

class PeminjamanMobilController extends Controller
{
    public function index(Request $request)
    {
        $data_mobil = Data_mobil::all();
    
        if ($request->ajax()) {
            if ($request->has('type') && $request->get('type') === 'mobil') {
                $data = Data_mobil::select('*');
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($data_mobils) {
                        return '<button type="button" class="btn btn-warning btn-sm pilih-mobil"
                                data-id="'.$data_mobils->id.'"
                                data-merek="'.$data_mobils->merek.'"
                                data-model="'.$data_mobils->model.'"
                                data-tarifperhari="'.$data_mobils->tarif_per_hari.'"
                                data-nomorplat="'.$data_mobils->nomor_plat.'"
                                data-gambar="'.$data_mobils->gambar.'"
                                data-status="'.$data_mobils->status.'">
                                <i class="fa-regular fa-circle-check"></i> Pilih
                            </button>';
                    })
                    ->toJson();
            }
        }
    
        return view('user.layout_peminjaman_mobil.index', compact('data_mobil'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'data_mobil_id' => 'required|exists:data_mobils,id',
        ]);
    
        $mobilTersedia = !Data_peminjaman_mobil::where('data_mobil_id', $request->data_mobil_id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('tanggal_mulai', [$request->tanggal_mulai, $request->tanggal_selesai])
                      ->orWhereBetween('tanggal_selesai', [$request->tanggal_mulai, $request->tanggal_selesai])
                      ->orWhere(function ($query) use ($request) {
                          $query->where('tanggal_mulai', '<=', $request->tanggal_mulai)
                                ->where('tanggal_selesai', '>=', $request->tanggal_selesai);
                      });
            })
            ->exists();
    

        if (!$mobilTersedia) {
            return redirect()->back()->with('mobil_unavailable', 'Mobil ini tidak tersedia pada tanggal yang di minta');
        }
            
    
        Data_peminjaman_mobil::create([
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'data_mobil_id' => $request->data_mobil_id,
            'user_id' => Auth::id(),
        ]);
    
        Data_mobil::where('id', $request->data_mobil_id)->update(['status' => 'Terpakai']);
    
        session()->flash('success_tambah_peminjaman', 'Data berhasil disimpan!');
        return redirect('daftar_sewa')->with([
            'user' => Auth::user(),
        ]);
    }
    
}
