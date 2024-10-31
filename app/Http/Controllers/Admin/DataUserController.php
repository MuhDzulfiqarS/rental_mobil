<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DataTables;

class DataUserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*');
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($users) {
                $edit = route('editdata_user', $users->id);
                $delete = route('data_user.destroy', $users->id);
                $deleteButton = '
                    <button class="btn btn-danger btn-sm delete-button" data-id="'.$users->id.'">
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
    return view('admin.layout_user.index')->with([
            'user' => Auth::user(),
            ]);
    }

    public function create(){
        return view ('admin.layout_user.create')->with([
            'user' => Auth::user(),
         ]);
    }

    public function store(Request $request)
    { 
        $request->validate([
            'username'=>'required',       
            'password'=>'required',
            'name'=>'required', 
            'no_telp'=>'required',
            'alamat'=>'required',
            'nomor_sim'=>'required', 
            'level' => 'required|in:1,2,3',
           
        ],[
            'username.required' => 'Username wajib diisi',
            'password.required' =>'Password wajib diisi',
            'name.required' =>'Nama wajib diisi',
            'no_telp.required' =>'Nomor Telepon wajib diisi',
            'alamat.required' =>'Alamat wajib diisi',
            'nomor_sim.required' =>'Nomor SIM wajib diisi',
            'level.required' => 'Anda harus memilih level',
            'level.in' => 'Pilihan level tidak valid',
           
        ]);
        
        $plainPassword = $request->input('password');
        $encryptedPassword = bcrypt($plainPassword);

        $data = $request->except(["_token", "submit"]);
        $data['password'] = $encryptedPassword;
        $data['pass_view'] = $plainPassword;

        User::create($data);
        
        session()->flash('success_tambah_data', 'Data berhasil disimpan!');
        return redirect('data_user')->with([
            'user' => Auth::user(),
        ]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.layout_user.edit', compact('user'));
    }

    public function update($id, Request $request)
    {  
        $user = User::find($id);
    
        $data = $request->except(['_token', '_method']);
    
        if ($request->filled('password')) {
            $plainPassword = $request->input('password');
            $data['password'] = bcrypt($plainPassword);
            $data['pass_view'] = $plainPassword;
        }
    
        $user->update($data);
    
        session()->flash('success_update_data', 'Data berhasil diupdate!');
        return redirect('data_user')->with([
            'user' => Auth::user(),
        ]);
    }



    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json([
            'success' => 'Data berhasil dihapus!',
            'user' => Auth::user(),
         ]);
    }
}
