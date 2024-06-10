@extends('dashboard.navigasi.master')
@section('content')

@auth
<body id="page-top" style="background-color: #6F4E37;">
    <div id="content-wrapper" class="d-flex flex-column align-items-center">
        <!-- Main Content -->
        <div id="content" class="w-100 d-flex justify-content-center">
            <!-- Begin Page Content -->
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Profile Column -->
                    <div class="col-lg-6">
                        <div class="card shadow mb-4" style="background-color: #D2B48C; border: none;">
                            <div class="card-header py-3" style="background-color: #8B5A2B; color: #fff;">
                                <h6 class="m-0 font-weight-bold ">Detail Profile</h6>
                            </div>
                            <div class="card-body" style="color: #6F4E37;">
                                <form id="updateProfileForm" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="name" value="{{ Auth::user()->nama }}" style="background-color: #F5DEB3; border: 1px solid #6F4E37;">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" style="background-color: #F5DEB3; border: 1px solid #6F4E37;">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ Auth::user()->alamat ?? 'Belum diisi' }}" style="background-color: #F5DEB3; border: 1px solid #6F4E37;">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Telepon</label>
                                        <input type="text" class="form-control" id="no_telpon" name="no_telpon" value="{{ Auth::user()->no_telpon ?? 'Belum diisi' }}" style="background-color: #F5DEB3; border: 1px solid #6F4E37;">
                                    </div>
                                    <button type="button" id="submitProfileForm" class="btn btn-primary w-100" style="background-color: #8B5A2B; border-color: #8B5A2B; color: #fff;">Update Profil</button>
                                </form>

                                <!-- Alert Message -->
                                <div id="alertMessage" style="display:none;" class="alert alert-success">Profile updated successfully.</div>

                                <!-- Back Button -->
                                <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3 w-100" style="background-color: #6F4E37; border-color: #8B5A2B; color: #fff;">Back to Dashboard</a>
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
    <a class="scroll-to-top rounded" href="#page-top" style="background-color: #8B5A2B;">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #F5DEB3; color: #6F4E37;">
                <div class="modal-header" style="background-color: #8B5A2B; color: #fff;">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer" style="background-color: #8B5A2B; color: #fff;">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#submitProfileForm').click(function(e){
                e.preventDefault();

                var formData = new FormData($('#updateProfileForm')[0]);

                $.ajax({
                    url: '{{ route('update-profile', Auth::user()->id) }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $('#alertMessage').show().delay(3000).fadeOut();
                    },
                    error: function(response) {
                        alert('There was an error updating the profile. Please try again.');
                    }
                });
            });
        });
    </script>
</body>
@endauth

@guest
<div class="container">
    <div class="alert alert-warning" role="alert" style="background-color: #D2B48C; border-color: #6F4E37; color: #6F4E37;">
        Anda harus login untuk mengakses halaman ini.
    </div>
</div>
@endguest

@endsection
