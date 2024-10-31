<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.view_register');
    }

    public function proses(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'no_telp.required' => 'No Telp tidak boleh kosong',
            'username.required' => 'Username tidak boleh kosong',
            'username.unique' => 'Username sudah digunakan',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        $plainPassword = $request->input('password');
        $encryptedPassword = bcrypt($plainPassword);

        User::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'nomor_sim' => $request->nomor_sim,
            'username' => $request->username,
            'password' => $encryptedPassword,  
            'pass_view' => $plainPassword,    
            'level' => 2, 
        ]);

        $request->session()->flash('success_register', true);

        return redirect()->route('login');
    }
    
}
