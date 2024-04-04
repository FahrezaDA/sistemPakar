<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Pakar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <style>
        /* tambahkan gaya kustom di sini */
        body {
            background-color: #2b2525;
        }
        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.1), 0 1px 4px rgba(0, 0, 0, 0.06);
            background-color: #cfcfcf   ;
            margin-top: 20px;
        }
        .card-body {
            padding: 2rem;
        }
        .form-control {
            border: 1px solid #e1e4e8;
            border-radius: 6px;
            padding: 12px;
            font-size: 16px;
            margin-bottom: 1rem;
        }
        .form-label {
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        .btn-primary {
            background-color: #2ea44f;
            border-color: #2ea44f;
            padding: 10px 16px;
            font-size: 16px;
            border-radius: 6px;
            font-weight: 600;
            transition: background-color 0.2s;
        }
        .btn-primary:hover {
            background-color: #2c974b;
            border-color: #2c974b;
        }
        .forgot-password {
            color: #586069;
            font-size: 14px;
            margin-bottom: 1rem;
        }
        .create-account {
            color: #0366d6;
            font-size: 14px;
            margin-top: 1rem;
            font-weight: 600;
        }
        .create-account:hover {
            text-decoration: underline;
        }
        .brand-logo {
            max-width: 100px;
            margin-bottom: 1rem;
        }
        .github-logo {
            max-width: 200px;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <section class="h-100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/logo3.1.png" class="brand-logo d-block mx-auto" alt="logo">

                            <h2 class="text-center mb-4">Login</h2>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                            </form>
                            <p class="forgot-password text-center">
                                <a href="#">Lupa Password?</a>
                            </p>
                            <p class="text-center">
                               Belum Punya Akun ? <a href="{{ route('register') }}" class="create-account">Buat Akun</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>
</html>
