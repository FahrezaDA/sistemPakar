<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animation.css')}}">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('img/miniLogo2.png')}}" type="image/x-icon">


    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        .gejala {
            color: red;
            padding: 5px;
            display: flex;
            justify-content: center;
        }

        .form {
            margin-top: 70px;
        }

        .diagnosa {
            margin: 10px;
            max-height: 300px;
            overflow: auto;
            border: 3px solid #a3f0ff;
            letter-spacing: 2px;
            text-align: center;
        }
    </style>
</head>



<body>
 {{-- logo  --}}

 <nav class="navbar navbar-expand-lg navbar-light ">
     <div class="container">
       <a class="navbar-brand" href="#"><img class="me-3" src="img/Logo3.1.png" alt="" width="40" height="30"> Sistem<span>Pakar</a>

       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav mx-auto">

            <li class="nav-item mx-2">
                <a class="nav-link @if(request()->is('/')) active @endif" href="/">Home</a>
            </li>


           <li class="nav-item mx-2">
            <a class="nav-link @if(request()->is('konsultasi')) active @endif" href="/diagnosa">Konsultasi</a>
            </li>

            <li class="nav-item mx-2">
                <a class="nav-link @if(request()->is('penyakit')) active @endif" href="/penyakit">Penyakit</a>
            </li>

            <li class="nav-item mx-2">
                <a class="nav-link @if(request()->is('gejala')) active @endif" href="/gejala">Gejala</a>
            </li>

            <li class="nav-item mx-2">
                <a class="nav-link @if(request()->is('aturan')) active @endif" href="/aturan">Aturan</a>
            </li>

         </ul>
         <div class="ml-2">
           <a href="#" id="loginNav" class="btn btn-outline-success mr-3 mx-2">Login</a>
           <a href="#" class="btn btn-danger mx-2">Daftar</a>
         </div>
       </div>
     </div>
   </nav>

<div class="container">
@yield('konten')
</div>




<script src="{{asset('js/boostrap.min.js')}}"></script>
</body>
</html>
