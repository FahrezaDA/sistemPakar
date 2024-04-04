@auth
@extends('layouts.master')
@section('title', 'konsultasi')

@section('konten')
<div class="container-fluid py-5" style="background-color: #f8f9fa;">
    <div class="col-xxl-5 mx-auto">
        <!-- Header text content-->
        <div class="text-center text-xxl-start mb-4">
            <div class="badge bg-primary text-white" style="font-size: 24px;"><div class="text-uppercase"> PILIH GEJALA</div></div>
        </div>
    </div>
    <div class="card kartu-custom">
        <div class="card-header bg-primary text-white fw-bold">
            Konsultasi Gejala
        </div>
        <div class="card-body">
            <form action="{{ URL::to('diagnosa') }}" method="post">
                @csrf
                <div class="mb-3 row" @style("display:none;")>
                    <label for="nama" class="col-sm-2 col-form-label text-custom">Nama Pengunjung</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row" @style("display:none;")>
                    <label for="alamat" class="col-sm-2 col-form-label text-custom">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ Auth::user()->alamat }}</textarea>
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                {{-- <div class="mb-3 row">
                    <label for="jenis_sapi" class="col-sm-2 col-form-label text-custom">Jenis Sapi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jenis_sapi" name="jenis_sapi" value="{{ old('jenis_sapi') }}">
                        @error('jenis_sapi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div> --}}
                @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <table class="table table-bordered custom-table">
                    <colgroup>
                        <col span="1" style="width: 3%;">
                        <col span="1" style="width: 12%;">
                        <col span="1" style="width: 80%;">
                        <col span="1" style="width: 5%;">
                    </colgroup>
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Kode Gejala</th>
                            <th>Nama Gejala</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($dataGejala as $gejala)
                        <tr>
                            <td class="text-center">{{ $i }}</td>
                            <td class="text-center">{{ $gejala['kode_gejala'] }}</td>
                            <td>{{ $gejala['gejala'] }}</td>
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input" name="resultGejala[]" value="{{ $gejala['kode_gejala'] }}"
                                @if (is_array(old('resultGejala')) && in_array($gejala['kode_gejala'], old('resultGejala'))) checked @endif>
                            </td>
                        </tr>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-info fw-bold" type="submit"><i class="fa-solid fa-floppy-disk me-1"></i> Hitung</button>
                    <button class="btn btn-danger fw-bold" type="reset"><i class="fa-solid fa-ban me-1"></i> Cancel</button>
                </div>
            </form>
        </div>
        <div class="card-footer"></div>
    </div>
</div>

@guest <!-- Menampilkan pesan jika pengguna belum login -->
<div class="container">
    <div class="alert alert-warning" role="alert">
        Anda harus login untuk mengakses halaman ini.
    </div>
</div>
@endguest
@endauth
@endsection

