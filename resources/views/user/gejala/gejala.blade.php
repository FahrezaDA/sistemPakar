@extends('layouts.master')

@section('title', 'Gejala')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 @style('text-align:center')>Gejala Penyakit Mulut dan Kuku Pada Sapi</h3>
                </div>
                <div class="card-body">
                    <img src="img/gejala/gejalaPMK.png" @style('margin-left:300px') alt="Gejala PMK" class="img-fluid mb-4">
                    <h2 class="mb-3">Daftar Gejala:</h2>
                    <ol class="list-group list-group-numbered">
                        @foreach ($gejala as $gejalaItem)
                        <li class="list-group-item">{{ $gejalaItem->gejala }} <span class="badge bg-primary">{{ $gejalaItem->kode_gejala }}</span></li>
                        @endforeach
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
