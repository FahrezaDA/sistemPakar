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
            $validatedData = $request->validate([
                'kode_gejala' => 'required|string',
                'gejala' => 'required|string',
                'nilai_densitas' => 'required|string',
            ]);

            Gejala::create($validatedData);

            return redirect('gejala')->with('success', 'Data gejala berhasil disimpan.');
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
    public function destroy(string $id_gejala)
    {
        $gejala = Gejala::find($id_gejala);
        $gejala->delete();
        return redirect()->route('gejala');
}

}
