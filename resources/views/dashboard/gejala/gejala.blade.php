@extends('dashboard.navigasi.master')
@section('content')
{{-- @include('nav.footer') --}}
@include('dashboard.navigasi.navbar')


@auth

<body id="page-top">

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->

                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  Selamat datang,{{Auth::user()->nama}}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="{{'profile'}}">Profile</a></li>

                                </ul>
                              </div>
                            <h6 class="m-0 font-weight-bold">Data Gejala</h6>

                        </div>
                        <div class="card-header py-3">
                        <button type="button" class="btn btn-add" data-bs-toggle="modal" data-bs-target="#add-gejala">Tambah Gejala</button>
                        @include('dashboard.gejala.add-gejala')

                        </div>
                        <div class="card-body">

                            <div class="table-responsive" id="tab">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th>Kode Gejala</th>
                                            <th>Gejala</th>
                                            <th>Nilai Densitas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <!-- footer content -->
                                    </tfoot>
                                    <tbody>
                                        @foreach ($gejala as $data)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $data->kode_gejala }}</td>
                                            <td>{{ $data->gejala }}</td>
                                            <td>{{ $data->nilai_densitas }}</td>
                                            <td>
                                                <a href="#" class="edit-button" data-bs-toggle="modal" data-bs-target="#edit-gejala--{{$data->id_gejala}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('delete-gejala', $data->id_gejala) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                                    <i class="fas fa-trash-alt" style="color: red"></i>
                                                </a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    @foreach ($gejala as $data)
                                    @include('dashboard.gejala.edit-gejala')

                                    @endforeach


                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $('.edit-button').click(function() {
                                                var id_gejala = $(this).data('id_gejala');
                                                var kode_gejala = $(this).data('kode_gejala');
                                                var gejala = $(this).data('gejala');
                                                var nilai_densitas = $(this).data('nilai_densitas');


                                                $('#edit-gejala').find('#edit-id_gejala').val(id_gejala);
                                                $('#edit-gejala').find('#edit-kode_gejala').val(kode_gejala);
                                                $('#edit-gejala').find('#edit-gejala').val(gejala);
                                                $('#edit-gejala').find('#edit-nilai_densitas').val(nilai_densitas);

                                            });
                                        });
                                    </script>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ... (modals and scripts) ... -->
        </section>
    </div>


    <!-- Modal Edit Data -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Modal Add Data -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="modal fade" id="add-gejala" tabindex="-1" role="dialog" aria-labelledby="addGejalaModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addGejalaModalLabel">Add Gejala</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Form for adding new user data -->
            <form id="add-user-form">
                <!-- Add form fields for new user data here -->
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Add User</button>
        </div>
    </div>
</div>
</div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    @endauth
    @guest <!-- Menampilkan pesan jika pengguna belum login -->
    <div class="container">
        <div class="alert alert-warning" role="alert">
            Anda harus login untuk mengakses halaman ini.
        </div>
    </div>
    @endguest
    <!-- Bootstrap core JavaScript-->
@endsection

