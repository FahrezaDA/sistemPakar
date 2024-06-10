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

    public function getProfileAdmin(){
        $user = Auth::user();
        $hasil = User::where('id', $user->id)->get();
        // $riwayat = Hasil::where('nama', $user->nama)
        // ->where('alamat', $user->alamat)
        // ->get()
        // ->map(function ($item) {
        //     $decoded = json_decode($item->hasil_diagnosa, true);
        //     $item->nama_penyakit = $decoded['Nama_Penyakit']['nama_penyakit'] ?? 'Tidak diketahui';
        //     return $item;
        // });

        // Sesuaikan model dan kolomnya sesuai kebutuhan Anda
        return view('dashboard.user.profile-admin',compact('hasil'));
    }

    public function dashboard()
    {
        $totalUsers = User::count();
        $totalGejala = Gejala::count();
        $totalPenyakit = Penyakit::count();
        $totalHasil = Hasil::count();

        return view('dashboard.dashboard', compact('totalUsers', 'totalGejala', 'totalPenyakit', 'totalHasil'));
    }

    public function updateProfile(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'alamat' => 'nullable|string|max:255',
            'no_telpon' => 'nullable|string|max:15',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update user data
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->alamat = $request->input('alamat', 'Belum diisi');
        $user->no_telpon = $request->input('no_telpon', 'Belum diisi');
        $user->save();

        // Return success response
        return response()->json(['success' => 'Profile updated successfully.']);
    }

}
