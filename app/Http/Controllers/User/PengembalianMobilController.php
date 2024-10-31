<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_mobil;
use App\Models\Data_peminjaman_mobil;
use App\Models\Data_pengembalian_mobil;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;


class PengembalianMobilController extends Controller
{
    public function index(Request $request)
    {
        
        return view('user.layout_pengembalian_mobil.index')->with([
            'user' => Auth::user(),
        ]);
    }


    public function store(Request $request)
    {
        $user = Auth::user();
        $nomorPlat = $request->input('nomor_plat');

        $mobil = Data_mobil::where('nomor_plat', $nomorPlat)->first();

        if (!$mobil) {
            return back()->with('error', 'Mobil tidak ditemukan.');
        }

        $peminjaman = Data_peminjaman_mobil::where('data_mobil_id', $mobil->id)
                                        ->where('user_id', $user->id)
                                        ->first();

        if (!$peminjaman) {
            return back()->with('error', 'Anda tidak menyewa mobil ini!');
        }

        $tanggalPengembalian = Carbon::now();
        $durasiHari = Carbon::parse($peminjaman->tanggal_mulai)->diffInDays($tanggalPengembalian) + 1;
        $totalBiaya = $durasiHari * $mobil->tarif_per_hari;

        $pengembalian = new Data_pengembalian_mobil();
        $pengembalian->data_peminjaman_mobil_id = $peminjaman->id;
        $pengembalian->user_id = $user->id;
        $pengembalian->data_mobil_id = $mobil->id;
        $pengembalian->tanggal_pengembalian = $tanggalPengembalian;
        $pengembalian->durasi_hari = $durasiHari;
        $pengembalian->total_biaya = $totalBiaya;
        $pengembalian->save();

        $mobil->status = 'tersedia';
        $mobil->save();

        session()->flash('success_tambah_pengembalian', 'Pengembalian mobil berhasil!');
        return redirect('daftar_pengembalian_mobil')->with([
            'user' => Auth::user(),
        ]);
    }

    public function checkRentalDetails(Request $request)
    {
        $user = Auth::user();
        $nomorPlat = $request->input('nomor_plat');
    
        $mobil = Data_mobil::where('nomor_plat', $nomorPlat)->first();
        if (!$mobil) {
            return response()->json(['error' => 'Mobil tidak ditemukan.'], 404);
        }
    
        $peminjaman = Data_peminjaman_mobil::where('data_mobil_id', $mobil->id)
                                        ->where('user_id', $user->id)
                                        ->first();
    
        if (!$peminjaman) {
            return response()->json(['error' => 'Anda tidak menyewa mobil ini!'], 404);
        }
    
        $tanggalPengembalian = Carbon::now();
        $durasiHari = Carbon::parse($peminjaman->tanggal_mulai)->diffInDays($tanggalPengembalian) + 1;
        $totalBiaya = $durasiHari * $mobil->tarif_per_hari;
    
        return response()->json([
            'durasi_hari' => $durasiHari,
            'total_biaya' => $totalBiaya,
            'tanggal_pengembalian' => $tanggalPengembalian->toDateString(),
            'mobil' => [
                'merek' => $mobil->merek,
                'model' => $mobil->model,
                'nomor_plat' => $mobil->nomor_plat,
                'tarif_per_hari' => $mobil->tarif_per_hari,
                'gambar' => $mobil->gambar, 
            ]
        ]);
    }
    

    
}
