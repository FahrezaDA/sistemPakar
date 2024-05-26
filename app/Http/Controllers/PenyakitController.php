<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penyakit = Penyakit::all();
        if(auth()->user()->role == 'pengguna') {
            return view("user.penyakit.penyakit", compact("penyakit"));
        } elseif(auth()->user()->role == 'admin') {
            return view("dashboard.penyakit.penyakit", compact("penyakit"));
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
        $validatedData = $request->validate([
            'kode_penyakit' => 'required|string',
            'nama_penyakit' => 'required|string',
            'deskripsi_penyakit' => 'required|string',
            'solusi' => 'required|string',
        ]);

        Penyakit::create($validatedData);

        return redirect('penyakit')->with('success', 'Data gejala berhasil disimpan.');
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
    public function update(Request $request, string $id_penyakit)
    {
        $validatedData = $request->validate([
            'kode_penyakit' => 'required|string|max:255',
            'nama_penyakit' => 'required|string|max:255', // Foto produk menjadi opsional untuk diubah
            'deskripsi_penyakit' => 'required|string|max:255',
            'solusi' => 'required|string|max:255',
        ]);

        // Dapatkan data produk berdasarkan ID
        $penyakit = Penyakit::findOrFail($id_penyakit);

        // Perbarui data produk
        $penyakit->kode_penyakit = $validatedData['kode_penyakit'];
        $penyakit->nama_penyakit = $validatedData['nama_penyakit'];
        $penyakit->deskripsi_penyakit = $validatedData['deskripsi_penyakit'];
        $penyakit->solusi = $validatedData['solusi'];

        $penyakit->save();
        return redirect()->route('penyakit')->with('success', 'Penyakit berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_penyakit)
    {
        $penyakit = Penyakit::find($id_penyakit);
        $penyakit->delete();
        return redirect()->route('penyakit');}
}
