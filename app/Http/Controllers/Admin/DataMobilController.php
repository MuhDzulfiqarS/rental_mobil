<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Data_mobil;
use Illuminate\Support\Facades\Storage;
use DataTables;

class DataMobilController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Data_mobil::select('*');

            if (!empty($request->merek)) {
                $data->where('merek', $request->merek);
            }

            if (!empty($request->model)) {
                $data->where('model', $request->model);
            }

            if (!empty($request->status)) {
                $data->where('status', $request->status);
            }
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('gambar', function($data) {
                return $data->gambar ? asset($data->gambar) : null;
            })
            ->addColumn('action', function ($data_mobils) {
                $edit = route('editdata_mobil', $data_mobils->id);
                $delete = route('data_mobil.destroy', $data_mobils->id);
                $deleteButton = '
                    <button class="btn btn-danger btn-sm delete-button" data-id="'.$data_mobils->id.'">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                ';
                
                return '<a href="'.$edit.'" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a> 
                    <form action="'.$delete.'" method="POST" style="display:inline;">
                        '.csrf_field().'
                        '.method_field("DELETE").'
                        '.$deleteButton.'
                    </form>';
            })
            ->toJson();
        }
    return view('admin.layout_mobil.index')->with([
            'user' => Auth::user(),
            ]);
    }

    public function create(){
        return view ('admin.layout_mobil.create')->with([
            'user' => Auth::user(),
         ]);
    }

    public function store(Request $request)
    { 
        $request->validate([
            'merek' => 'required|in:Toyota,Honda,Mitsubishi,Suzuki',
            'model' => 'required|in:Fortuner,Innova,Avanza,Agya,Calya,Honda Jazz,HRV,Mobilio,Brio,Xpander,Ertiga,Yaris',
            'nomor_plat' => 'required',
            'tarif_per_hari' => 'required',
            'status' => 'required|in:Tersedia,Terpakai',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240', 
           
            
        ], [
            'merek.required' => 'Anda harus memilih merek',
            'merek.in' => 'Pilihan merek tidak valid',
            'model.required' => 'Anda harus memilih model',
            'model.in' => 'Pilihan model tidak valid',
            'nomor_plat.required' => 'Nomor plat wajib di isi',
            'tarif_per_hari.required' => 'Tarif per hari wajib di isi',
            'status.required' => 'Anda harus memilih status',
            'status.in' => 'Pilihan status tidak valid',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'Gambar harus berformat jpeg, png, jpg, gif, atau svg',
            'gambar.max' => 'Ukuran gambar maksimal adalah 10MB',
           
        ]);
    
        $data = $request->except(["_token", "submit"]);
    
        $fieldGambar = ['gambar'];
        foreach ($fieldGambar as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = $file->getClientOriginalName();
                $path = $file->move(public_path('images_mobil'), $filename); 
                $data[$field] = 'images_mobil/' . $filename; 
            }
        }
    
        Data_mobil::create($data);
    
        session()->flash('success_tambah_data', 'Data berhasil disimpan!');
        return redirect('data_mobil')->with([
            'user' => Auth::user(),
        ]);
    }

    public function edit($id)
    {
        $data_mobil = Data_mobil::find($id); 
        return view('admin.layout_mobil.edit', compact('data_mobil'))->with([
            'user' => Auth::user(),
         ]);
    }

    public function update($id, Request $request)
    {
        $data_mobil = Data_mobil::find($id);
    
        $request->validate([
            'merek' => 'required',
            'model' => 'required',
            'nomor_plat' => 'required',
            'tarif_per_hari' => 'required',
            'status' => 'required|in:Tersedia,Terpakai',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240', 
           
            
        ], [
            'merek.required' => 'Merek wajib di isi',
            'model.required' => 'Model wajib di isi',
            'nomor_plat.required' => 'Nomor plat wajib di isi',
            'tarif_per_hari.required' => 'Tarif per hari wajib di isi',
            'status.required' => 'Anda harus memilih status',
            'status.in' => 'Pilihan status tidak valid',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'Gambar harus berformat jpeg, png, jpg, gif, atau svg',
            'gambar.max' => 'Ukuran gambar maksimal adalah 10MB',
           
        ]);
    
        $data_mobil->merek = $request->merek;
        $data_mobil->model = $request->model;
        $data_mobil->nomor_plat = $request->nomor_plat;
        $data_mobil->tarif_per_hari = $request->tarif_per_hari;
        $data_mobil->status = $request->status;

        if ($request->hasFile('gambar')) {
            if ($data_mobil->gambar && file_exists(public_path($data_mobil->gambar))) {
                unlink(public_path($data_mobil->gambar));
            }

            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images_mobil'), $filename); 
            $data_mobil->gambar = 'images_mobil/' . $filename; 
        }
    
        $data_mobil->save();
    
        session()->flash('success_update_data', 'Data berhasil diupdate!');
        return redirect()->route('data_mobil');
    }

    public function destroy($id)
    {
        $data_mobil = Data_mobil::find($id);
    
        if (!$data_mobil) {
            return response()->json([
                'error' => 'Data tidak ditemukan'
            ], 404);
        }
    
         $fieldGambar = ['gambar'];
    
         foreach ($fieldGambar as $field) {
             if ($data_mobil->$field && file_exists(public_path($data_mobil->$field))) {
                 unlink(public_path($data_mobil->$field));
             }
         }
    
        $data_mobil->delete();
    
        return response()->json([
            'success' => 'Data berhasil dihapus',
            'user' => Auth::user(),
        ]);
    }
}
