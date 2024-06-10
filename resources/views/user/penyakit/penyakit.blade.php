@extends('layouts.master')
@section('title', 'penyakit')


@section('konten')
<div class="container">
    <h1 id="h1Gejala"> Penyakit Mulut dan Kuku Pada Sapi  </h1>
    <img src="img/sapi tertular pmk.png" alt="" id="gambarGejala">
</div>
<div id="listGejala">
    <ol>
        @foreach ($penyakit as $penyakitItem)
            <li>{{ $penyakitItem ->nama_penyakit}} </br>{{ $penyakitItem ->deskripsi_penyakit}} </li>


        @endforeach
    </ol>
</div>
@endsection

