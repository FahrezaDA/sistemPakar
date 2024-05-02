<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gejala = Gejala::all();
        if(auth()->user()->role == 'pengguna') {
            return view("gejala.gejala", compact("gejala"));
        } elseif(auth()->user()->role == 'admin') {
            return view("dashboard.gejala.gejala", compact("gejala"));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'kode_gejala' => 'required|string',
                'gejala' => 'required|string',
                'nilai_densitas' => 'required|string',
            ]);

            // Buat objek Gejala baru
            $gejala = new Gejala();
            $gejala->kode_gejala = $validatedData['kode_gejala'];
            $gejala->gejala = $validatedData['gejala'];
            $gejala->nilai_densitas = $validatedData['nilai_densitas'];

            // Simpan objek Gejala ke dalam database
            $gejala->save();

            // Redirect kembali ke halaman yang sesuai
            return redirect('gejala')->with('success', 'Gejala berhasil ditambahkan!');
        } catch (\Exception $e) {
            // Tangkap pengecualian dan tampilkan pesan kesalahan
            return redirect('home')->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_gejala)
    {
        $validatedData = $request->validate([
            'kode_gejala' => 'required|string|max:255',
            'gejala' => 'required|string|max:255', // Foto produk menjadi opsional untuk diubah
            'nilai_densitas' => 'required|string|max:255',
        ]);

        // Dapatkan data produk berdasarkan ID
        $gejala = Gejala::findOrFail($id_gejala);

        // Perbarui data produk
        $gejala->kode_gejala = $validatedData['kode_gejala'];
        $gejala->gejala = $validatedData['gejala'];
        $gejala->nilai_densitas = $validatedData['nilai_densitas'];

        $gejala->save();
        return redirect()->route('gejala')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_gejala)
    {
        $gejala = Gejala::find($id_gejala);
        $gejala->delete();
        return redirect()->route('gejala');
}

}
