<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aturan;
use App\Models\Gejala;
use App\Models\Penyakit;
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
        return view("aturan.aturan", compact('aturan','gejalas'));
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
