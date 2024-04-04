<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Pakar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* tambahkan gaya kustom di sini */
        .gradient-form {
            background-color: #2b2525;
        }
        .card {
            background-color: #cfcfcf;
        }
        .card-body {
            padding: 2rem; /* Ubah padding menjadi 2rem */
        }
        .form-outline input[type=email],
        .form-outline input[type=password],
        .form-outline input[type=text] {
            border-radius: 15px; /* Ubah radius border menjadi 15px */
            padding: 0.8rem; /* Ubah padding menjadi 0.8rem */
        }
        .btn-primary {
            border-radius: 15px; /* Ubah radius border tombol menjadi 15px */
            padding: 0.75rem 1.5rem;
        }
        .gradient-custom-2 {
            background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
        }
        .background-image {
            background-image: url('img/background-sapi-login.png');
            background-size: cover;
            background-position: center;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.6);
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
    <section class="h-100 gradient-form">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 col-lg-6"> <!-- Ubah ukuran kolom di sini -->
                    <div class="card rounded-3 text-black">
                        <div class="card-body">
                            <div class="text-center mb-4"> <!-- Ubah margin menjadi mb-4 -->
                                <img src="img/logo3.1.png" style="width: 185px;" alt="logo">
                                <h4 class="mt-1 mb-3">Register</h4> <!-- Ubah margin menjadi mb-3 -->
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-outline mb-3"> <!-- Ubah margin menjadi mb-3 -->
                                    <label class="form-label" for="nama">Nama</label>
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                                </div>
                                <div class="form-outline mb-3"> <!-- Ubah margin menjadi mb-3 -->
                                    <label class="form-label" for="email">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                                <div class="form-outline mb-3"> <!-- Ubah margin menjadi mb-3 -->
                                    <label class="form-label" for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                </div>
                                <div class="form-outline mb-3"> <!-- Ubah margin menjadi mb-3 -->
                                    <label class="form-label" for="password-confirm">Konfirmasi Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="form-outline mb-3"> <!-- Ubah margin menjadi mb-3 -->
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">
                                </div>
                                <div class="text-center mb-3"> <!-- Ubah margin menjadi mb-3 -->
                                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>
</html>
