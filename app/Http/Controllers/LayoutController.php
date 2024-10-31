<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Data_mobil;

class LayoutController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
    
        if ($user->level == 1) {
            
            $totalMobilTersedia = Data_mobil::where('status', 'Tersedia')->count();
            $totalMobilTerpakai = Data_mobil::where('status', 'Terpakai')->count();

            return view('layout.home')->with([
                'user' => $user,
                'totalMobilTersedia' => $totalMobilTersedia,
                'totalMobilTerpakai' => $totalMobilTerpakai,
            ]);
        } elseif ($user->level == 2) {

            $merek = $request->input('merek');
            $model = $request->input('model');
    
            $mobilTersedia = Data_mobil::where('status', 'Tersedia')
                ->when($merek, function ($query, $merek) {
                    return $query->where('merek', $merek);
                })
                ->when($model, function ($query, $model) {
                    return $query->where('model', $model);
                })
                ->get();
    
            if ($mobilTersedia->isEmpty()) {
                return redirect()->back()->with('mobil_tidakada', 'Tidak ada mobil yang ditemukan sesuai filter.');
            }
    
            return view('layout.home_user')->with([
                'user' => $user,
                'mobilTersedia' => $mobilTersedia,
            ]);
        }
    
        return redirect('login')->with('error', "Level pengguna tidak dikenali.");
    }
    
    

}
