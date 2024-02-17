@extends('layouts.master')
@section('title', 'gejala')
@section('konten')
<div class="container">
    <h1 id="h1Gejala"> Gejala Penyakit Mulut dan Kuku Pada Sapi  </h1>
    <img src="img/gejala/gejalaPMK.png" alt="" id="gambarGejala">
</div>
<div id="listGejala">
    <ol>
        @foreach ($gejala as $gejalaItem)
            <li>{{ $gejalaItem ->gejala}} {{"{".$gejalaItem ->kode_gejala."}" }}</li>

        @endforeach
    </ol>
    <input type="submit" id="btn-tambahGejala" value="Tambah Gejala">
</div>
@endsection
