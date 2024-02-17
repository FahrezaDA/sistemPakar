@extends('layouts.master')
@section('title', 'aturan')

@section('konten')
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
            @php
                $gejalaGroups = $aturan->groupBy('gejala_id');
            @endphp
            @foreach ($gejalaGroups as $gejalaId => $group)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ optional($group->first()->gejala)->kode_gejala}}</td>
                    <td>{{ optional($group->first()->gejala)->gejala}}</td>
                    <td>
                        @foreach ($group as $data)
                            {{ $data->penyakit->nama_penyakit }} ({{ $data->penyakit->kode_penyakit }}) <br>
                        @endforeach
                    </td>
                    <td>{{ $group->first()->belief }}</td>
                    <td>
                        <a href="#" class="edit-button" data-bs-toggle="modal" data-bs-target="#edit-user" data-id_user="{{ $group->first()->id_user }}" data-name="{{ $group->first()->name }}" data-email="{{ $group->first()->email }}" data-area="{{ $group->first()->area }}" data-no_hp="{{ $group->first()->no_hp }}" data-kelas="{{ $group->first()->kelas }}">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
