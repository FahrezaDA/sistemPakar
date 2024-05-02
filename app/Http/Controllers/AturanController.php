<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aturan;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Support\Facades\DB;
class AturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aturan = Aturan::all();
        $Gejala = Gejala::all();
        $Penyakit = Penyakit::all();
        $gejalas = Gejala::orderBy('id_gejala')->get();

        return view("dashboard.aturan.aturan", compact('aturan','gejalas'));
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
            'kode_gejala' => 'required|string',

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
    public function update(Request $request, string $id_aturan)
    {
        $validatedData = $request->validate([
            'kode_penyakit' => 'required|string|max:255',
            'kode_gejala' => 'required|string|max:255', // Foto produk menjadi opsional untuk diubah
        ]);

        // Dapatkan data produk berdasarkan ID
        $aturan = Aturan::findOrFail($id_aturan);

        // Perbarui data produk
        $aturan->kode_penyakit = $validatedData['kode_penyakit'];
        $aturan->kode_gejala = $validatedData['kode_gejala'];

        $aturan->save();
        return redirect()->route('aturan')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_aturan)
    {
        $aturan = Aturan::find($id_aturan);
        $aturan->delete();
        return redirect()->route('aturan');
    }
}
