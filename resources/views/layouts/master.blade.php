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
            <a class="nav-link @if(request()->is('konsultasi')) active @endif" href="/konsultasi">Konsultasi</a>
            </li>

            <li class="nav-item mx-2">
                <a class="nav-link @if(request()->is('penyakit')) active @endif" href="/penyakit">Penyakit</a>
            </li>

            <li class="nav-item mx-2">
                <a class="nav-link @if(request()->is('gejala')) active @endif" href="/gejala">Gejala</a>
            </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Kategori
             </a>
             <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="#">Kategori 1</a></li>
               <li><a class="dropdown-item" href="#">Kategori 2</a></li>
               <li><a class="dropdown-item" href="#">Kategori 3</a></li>
             </ul>
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
