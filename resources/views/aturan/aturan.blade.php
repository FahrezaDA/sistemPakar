@extends('layouts.master')
@section('title', 'aturan')

@section('konten')
<div class="mb-3" @style("margin-top:15px;")>
    <a href="{{ route('tambah-aturan') }}" class="btn btn-primary">Tambah Aturan</a>
</div>
    <table class="table table-striped" id="table-1">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Kode Gejala</th>
                <th>Gejala</th>
                <th>Penyakit</th>
                <th>Nilai Kepercayaan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <!-- footer content -->
        </tfoot>
        <tbody>
            @foreach ($aturan as $data)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ optional($data->gejala)->kode_gejala}}</td>
                    <td>{{ optional($data->gejala)->gejala}}</td>
                    <td>{{ optional($data->penyakit)->nama_penyakit}} ( {{optional($data->penyakit)->kode_penyakit}}) </td>

                    <td>{{ $data->belief }}</td>

                    <td>
                        <a href="#" class="edit-button" data-bs-toggle="modal" data-bs-target="#edit-user" data-id_user="{{ $data->id_user }}" data-name="{{ $data->name }}" data-email="{{ $data->email }}" data-area="{{ $data->area }}" data-no_hp="{{ $data->no_hp }}" data-kelas="{{ $data->kelas }}">
                            <i class="fas fa-edit"></i>
                        </a>

                        {{-- <a href="{{ route('delete-user', $data->id_user) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                            <i class="fas fa-trash-alt" style="color: red"></i>
                        </a> --}}
                    </td>
                </tr>
                {{-- @include('dashboard.user.edit') --}}

            @endforeach
        </tbody>
    </table>
@endsection
