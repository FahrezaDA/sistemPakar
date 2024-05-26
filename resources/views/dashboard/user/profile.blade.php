@extends('dashboard.navigasi.master')
@section('content')

@auth
<body id="page-top">
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Profile Column -->
                    <div class="col-lg-4">

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Detail Profil</h6>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="name" value="{{ Auth::user()->nama }}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ Auth::user()->alamat ?? 'Belum diisi' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Telepon</label>
                                        <input type="text" class="form-control" id="no_hp" value="{{ Auth::user()->no_telpon ?? 'Belum diisi' }}">
                                    </div>
                                    <button type="button" class="btn btn-primary">Update Profil</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Data Riwayat Column -->
                    <div class="col-lg-8">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Riwayat</h6>
                            </div>
                            <div class="card-header py-3">
                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-gejala">Tambah Gejala</button> --}}
                                @include('dashboard.gejala.add-gejala')
                                {{-- @include('dashboard.produk.add-produk-to-admin') --}}
                            </div>
                            <div class="card-body">
                                <div class="table-responsive" id="tab">
                                    <table id="example" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Penyakit</th>
                                                <th>Solusi</th>
                                                {{-- <th>Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <!-- footer content -->
                                        </tfoot>
                                        <tbody>
                                            @foreach ($riwayat as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->nama_penyakit }}</td>
                                                <td>{{ $item->solusi }}</td>
                                            </tr>
                                            @endforeach
                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- Scroll to Top Button-->
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
</body>
@endauth

@guest
<div class="container">
    <div class="alert alert-warning" role="alert">
        Anda harus login untuk mengakses halaman ini.
    </div>
</div>
@endguest

@endsection
