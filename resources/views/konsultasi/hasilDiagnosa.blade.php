@extends('layouts.master')

@section('konten')

<div class="card shadow-sm mb-3" style="background-color: #fff; border: 1px solid #ccc; font-size: 0.9rem;">
    <div class="card-header bg-gradient-primary-to-secondary text-white fw-bold" style="background-color: #f2f2f2; border-bottom: 1px solid #ccc; padding: 8px;">
        <h5 class="m-0">Nota Diagnosa</h5>
    </div>
    <div class="card-body" style="padding: 8px;">
        <h6 class="text-custom"><b>1. Pengunjung</b></h6>
        <div class="row row-cols-md-2">
            <div class="col mb-2">
                <strong>Nama:</strong> {{ $dataDiagnosa['nama'] }}
            </div>
            <div class="col mb-2">
                <strong>Alamat:</strong> {{ $dataDiagnosa['alamat'] }}
            </div>
        </div>

        <hr style="margin: 8px 0;">

        <h6 class="text-custom"><b>2. Gejala yang Dialami</b></h6>
        <div class="list-group">
            @foreach ($hasilDiagnosa->Gejala_Penyakit as $gejala)
                <a href="#" class="list-group-item list-group-item-action" style="padding: 4px 8px;">{{ $gejala->nama_gejala }}</a>
            @endforeach
        </div>

        <hr style="margin: 8px 0;">

        <h6 class="text-custom"><b>3. Penyakit</b></h6>
        <ul class="list-group" style="margin-bottom: 8px;">
            <li class="list-group-item" style="padding: 4px 8px;"><strong>Nama Penyakit:</strong> {{ $hasilDiagnosa->Nama_Penyakit->nama_penyakit }}</li>
            <li class="list-group-item" style="padding: 4px 8px;"><strong>Nilai Kepercayaan:</strong> {!! '<b>' . $hasilDiagnosa->Persentase_Penyakit . '</b>' . ' / (' . $hasilDiagnosa->Nilai_Belief_Penyakit . ')' !!}</li>
        </ul>

        <hr style="margin: 8px 0;">

        <h6 class="text-custom"><b>4. Solusi</b></h6>
        <div class="list-group">
            @foreach (json_decode($hasilDiagnosa->Solusi_Penyakit->solusi) as $solusi)
                <a href="#" class="list-group-item list-group-item-action" style="padding: 4px 8px;">{{ $solusi }}</a>
            @endforeach
        </div>
    </div>
    <div class="card-footer"></div>
</div>
<a href="{{ URL::to('diagnosa') }}" class="btn btn-sm btn-info text-white"><i class="fa-solid fa-arrow-left me-1"></i> Diagnosa Ulang</a>

@endsection
