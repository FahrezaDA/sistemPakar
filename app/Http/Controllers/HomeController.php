<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hasil;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getProfile(){
        $user = Auth::user();
        $hasil = User::where('id', $user->id)->get();
        $riwayat = Hasil::where('nama', $user->nama)
        ->where('alamat', $user->alamat)
        ->get()
        ->map(function ($item) {
            $decoded = json_decode($item->hasil_diagnosa, true);
            $item->nama_penyakit = $decoded['Nama_Penyakit']['nama_penyakit'] ?? 'Tidak diketahui';
            return $item;
        });

        // Sesuaikan model dan kolomnya sesuai kebutuhan Anda
        return view('dashboard.user.profile',compact('hasil','riwayat'));
    }

    public function dashboard()
    {
        $totalUsers = User::count();
        $totalGejala = Gejala::count();
        $totalPenyakit = Penyakit::count();
        $totalHasil = Hasil::count();

        return view('dashboard.dashboard', compact('totalUsers', 'totalGejala', 'totalPenyakit', 'totalHasil'));
    }
}
