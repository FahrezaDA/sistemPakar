<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hasil;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $riwayat = Hasil::all()->map(function ($item) {
            $decoded = json_decode($item->hasil_diagnosa, true);
            $item->nama_penyakit = $decoded['Nama_Penyakit']['nama_penyakit'] ?? 'Tidak diketahui';
            return $item;
        });
        return view("dashboard.riwayat.riwayat", compact("riwayat"));
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
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
