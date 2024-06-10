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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">

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
       <a class="navbar-brand" href="#"><img class="me-3" src="/img/Logo3.1.png" alt="" width="40" height="30"> Sistem Pakar</a>

       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

         <ul class="navbar-nav mx-auto">

            <li class="nav-item mx-2">
                <a class="nav-link @if(request()->is('/home')) active @endif" href="/home">Home</a>
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

            {{-- <li class="nav-item mx-2">
                <a class="nav-link @if(request()->is('aturan')) active @endif" href="/aturan">Aturan</a>
            </li> --}}

         </ul>
         @if (Auth::check())
         <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Selamat Datang, {{Auth::user()->nama}}
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                 Logout
             </a>
              <a class="dropdown-item" href="profile">Profile</a>
            </div>
          </div>
     @else
         <a href="/login" id="loginNav" class="btn btn-outline-success mr-3 mx-2">Login</a>
         <a href="/register" class="btn btn-danger mx-2">Daftar</a>
     @endif


       </div>
     </div>
   </nav>
   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<div class="container">
@yield('konten')
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{asset('js/boostrap.min.js')}}"></script>
</body>
</html>
