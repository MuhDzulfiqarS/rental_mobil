<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $user = Auth::user();
    
        if ($user) {
        
            if ($user->level == 1) {
                return redirect()->intended('home');
            } elseif ($user->level == 2) {
                return redirect()->intended('home_user');
            }
        }
    
        return view('login.view_login');
    }
    

    public function proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);
    
        // Cek apakah username ada di database
        $userExists = \App\Models\User::where('username', $request->username)->exists();
        
        if (!$userExists) {
            return back()->withErrors([
                'username' => 'Maaf, username belum terdaftar',
            ])->onlyInput('username');
        }
    
        $kredensial = $request->only('username', 'password');
    
        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
    
            if ($user) {
                $request->session()->flash('login_success', true);
    
                if ($user->level == 1) {
                    return redirect()->intended('home');
                } elseif ($user->level == 2) {
                    return redirect()->intended('home_user');
                }
            }
    
            return redirect()->intended('/');
        }
    
        return back()->withErrors([
            'username' => 'Maaf username atau password anda salah',
        ])->onlyInput('username');
    }
    
    


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $request->session()->flash('logout_success', true);
       
        return redirect('/login');
    }
}
