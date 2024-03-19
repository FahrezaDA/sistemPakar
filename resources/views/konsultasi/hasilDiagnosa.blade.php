@extends('layouts.master')

@section('konten')


        <div class="card shadow-sm mb-3" style="background-color: #4b86fe;">
            <div class="card-header bg-gradient-primary-to-secondary text-white fw-bold">
                Hasil Diagnosa
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <h5 class="text-custom"><b>1. Pengunjung</b></h5>
                    <div class="row row-cols-md-3 row-cols-sm-2 row-cols-1">
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title"><strong>Nama:</strong></h6>
                                    <p class="card-text">{{ $dataDiagnosa['nama'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title"><strong>Jenis Sapi:</strong></h6>
                                    <p class="card-text">{{ $dataDiagnosa['jenis_sapi'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title"><strong>Alamat:</strong></h6>
                                    <p class="card-text">{{ $dataDiagnosa['alamat'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-4">
                    <h5 class="text-custom"><b>2. Gejala yang dialami</b></h5>
                    <div class="list-group">
                        @foreach ($hasilDiagnosa->Gejala_Penyakit as $gejala)
                            <a href="#" class="list-group-item list-group-item-action">{{ $gejala->nama_gejala }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="container-fluid mt-4">
                    <h5 class="text-custom"><b>3. Penyakit</b></h5>
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Nama Penyakit:</strong> {{ $hasilDiagnosa->Nama_Penyakit->nama_penyakit }}</li>
                            <li class="list-group-item"><strong>Nilai Kepercayaan:</strong> {!! '<b>' . $hasilDiagnosa->Persentase_Penyakit . '</b>' . ' / (' . $hasilDiagnosa->Nilai_Belief_Penyakit . ')' !!}</li>
                        </ul>
                    </div>
                </div>

                <div class="container-fluid mt-4">
                    <h5 class="text-custom"><b>4. Solusi</b></h5>
                    <div class="list-group">
                        @foreach (json_decode($hasilDiagnosa->Solusi_Penyakit->solusi) as $solusi)
                            <a href="#" class="list-group-item list-group-item-action">{{ $solusi }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>
        <a href="{{ URL::to('diagnosa') }}" class="btn btn-sm btn-info text-white"><i class="fa-solid fa-arrow-left me-1"></i> Diagnosa Ulang</a>

@endsection
