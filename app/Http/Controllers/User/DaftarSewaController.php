<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_mobil;
use App\Models\Data_peminjaman_mobil;
use Illuminate\Support\Facades\Auth;
use DataTables;

class DaftarSewaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
     
            $data = Data_peminjaman_mobil::where('user_id', Auth::id())->select('*');
            
            return DataTables::of($data)
                ->addIndexColumn()
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
                ->addColumn('action', function ($data_peminjaman_mobils) {
        
                    $delete = route('daftar_sewa.destroy', $data_peminjaman_mobils->id);
                    $deleteButton = '
                        <button class="btn btn-danger btn-sm delete-button" data-id="'.$data_peminjaman_mobils->id.'">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    ';
                    
                    return '<form action="'.$delete.'" method="POST" style="display:inline;">
                            '.csrf_field().'
                            '.method_field("DELETE").'
                            '.$deleteButton.'
                        </form>';
                })
                ->toJson();
        }
    
        return view('User.layout_daftar_sewa.index')->with([
            'user' => Auth::user(),
        ]);
    }

    public function destroy($id)
    {
        $data_peminjaman_mobil = Data_peminjaman_mobil::find($id);
        $data_peminjaman_mobil->delete();
        return response()->json([
            'success' => 'Data berhasil dihapus!',
            'user' => Auth::user(),
         ]);
    }
}
