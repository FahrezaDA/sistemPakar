@extends('dashboard.navigasi.master')

@section('content')
    @include('dashboard.navigasi.navbar')

    @auth
        <body id="page-top">
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <div class="container">

                        <!-- Dashboard Summary -->
                        <div class="row">

                            <!-- Total Users -->
                            <div  id="card-dashboard" class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Total Users</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalUsers }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Gejala -->
                            <div id="card-dashboard" class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Total Gejala</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalGejala }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-virus fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Penyakit -->
                            <div id="card-dashboard" class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    Total Penyakit</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalPenyakit }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-procedures fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Hasil -->
                            <div id="card-dashboard" class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Total Hasil Diagnosa</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalHasil }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="imgBox">
                                <img src="img/gambarSapi2.png"  style="width: 420px; height:400px; margin-left:250px; " class="gambarSapi">

                                </div>

                        </div>

                        <!-- DataTales Example -->

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
