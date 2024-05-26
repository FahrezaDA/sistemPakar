@extends('layouts.master')

@section('konten')

<div class="card shadow-sm mb-3" style="background-color: #fff; border: 1px solid #ccc; font-size: 0.9rem;">
    <div class="card-header bg-gradient-primary-to-secondary text-white fw-bold" style="background-color: #A67B5B; border-bottom: 1px solid #ccc; padding: 8px; margin-top:20px;">
        <h5 @style('text-align:center; color:black; font-weight:700;') class="m-0">HASIL DIAGNOSA</h5>
    </div>
    <div class="card-body" style="padding: 8px;">
        <h5 class="text-custom"><b>1. Pengunjung</b></h5>
        <div class="row row-cols-md-2">
            <div class="col mb-2" @style("display:none;")>
                <strong>id hasil</strong> {{ $dataDiagnosa['id_hasil'] }}
            </div>
            <div class="col mb-2">
                <strong>Nama:</strong> {{ $dataDiagnosa['nama'] }}
            </div>
            <div class="col mb-2">
                <strong>Alamat:</strong> {{ $dataDiagnosa['alamat'] }}
            </div>
        </div>

        <hr style="margin: 8px 0;">

        <h5 class="text-custom"><b>2. Gejala yang Dialami</b></h5>
        <div class="list-group">
            @foreach ($hasilDiagnosa->Gejala_Penyakit as $gejala)
                <a href="#" class="list-group-item list-group-item-action" style="padding: 4px 8px;">{{ $gejala->nama_gejala }}</a>
            @endforeach
        </div>

        <hr style="margin: 8px 0;">

        <h5 class="text-custom"><b>3. Penyakit</b></h5>
        <ul class="list-group" style="margin-bottom: 8px;">
            <li class="list-group-item" style="padding: 4px 8px;"><strong>Nama Penyakit:</strong> {{ $hasilDiagnosa->Nama_Penyakit->nama_penyakit }} </li>
            <li class="list-group-item" style="padding: 4px 8px;"><strong>Deskripsi Penyakit:</strong> {{ $hasilDiagnosa->Deskripsi_Penyakit->deskripsi_penyakit }} </li>
            <li class="list-group-item" style="padding: 4px 8px;"><strong>Nilai Kepercayaan:</strong> {!! '<b>' . $hasilDiagnosa->Persentase_Penyakit . '</b>' . ' / (' . $hasilDiagnosa->Nilai_Belief_Penyakit . ')' !!}</li>
        </ul>



        <hr style="margin: 8px 0;">

        <h5 class="text-custom"><b>5. Solusi</b></h5>
        <div class="list-group">
            @foreach (json_decode($hasilDiagnosa->Solusi_Penyakit->solusi) as $solusi)
                <a href="#" class="list-group-item list-group-item-action" style="padding: 4px 8px;">{{ $solusi }}</a>
            @endforeach
        </div>
    </div>
    <div class="card-footer"></div>
</div>
<a id="aw" href="{{ URL::to('diagnosa') }}" class="btn btn-add"><i class="fa-solid fa-arrow-left me-1" @style('')></i> Diagnosa Ulang</a>
<a id="aw" href="{{ URL::to('cetakHasil/' . $dataDiagnosa['id_hasil']) }}" class="btn btn-print"><i class="fa-solid fa-arrow-left me-1" @style('background-color:#00FF00')></i> Cetak</a>


@endsection
