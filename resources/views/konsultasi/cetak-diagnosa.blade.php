<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Nota</title>

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
        /* CSS tambahan */
        body, html {
            height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa; /* Warna latar belakang */
        }

        .container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #fff; /* Warna latar belakang kontainer */
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="card shadow-sm mb-3" style="background-color: #fff; border: 1px solid #ccc; font-size: 0.9rem;">
        <div class="card-header bg-gradient-primary-to-secondary text-white fw-bold" style="background-color: #A67B5B; border-bottom: 1px solid #ccc; padding: 8px; margin-top:20px;">
            <h5 @style('text-align:center; color:black; font-weight:700;') class="m-0">HASIL DIAGNOSA</h5>
        </div>
        <div class="card-body" style="padding: 8px;">
            <h5 class="text-custom"><b>1. Pengunjung</b></h5>
            <div class="row row-cols-md-2">
                <div class="col mb-2">
                    <strong>Nama:</strong> {{ $dataDiagnosa['nama'] }}
                </div>
                <div class="col mb-2">
                    <strong>Alamat:</strong> {{ $dataDiagnosa['alamat'] }}
                </div>
            </div>

            <hr style="margin: 8px 0;">

            <h5 class="text-custom"><b>2. Gejala yang Dialami</b></h5>
            <div class="list-group">
                @foreach ($hasilDiagnosa->Gejala_Penyakit as $gejala)
                    <a href="#" class="list-group-item list-group-item-action" style="padding: 4px 8px;">{{ $gejala->nama_gejala }}</a>
                @endforeach
            </div>

            <hr style="margin: 8px 0;">

            <h5 class="text-custom"><b>3. Penyakit</b></h5>
            <ul class="list-group" style="margin-bottom: 8px;">
                <li class="list-group-item" style="padding: 4px 8px;"><strong>Nama Penyakit:</strong> {{ $hasilDiagnosa->Nama_Penyakit->nama_penyakit }}</li>
                <li class="list-group-item" style="padding: 4px 8px;"><strong>Nilai Kepercayaan:</strong> {!! '<b>' . $hasilDiagnosa->Persentase_Penyakit . '</b>' . ' / (' . $hasilDiagnosa->Nilai_Belief_Penyakit . ')' !!}</li>
                <li class="list-group-item" style="padding: 4px 8px;"><strong>Deskripsi Penyakit:</strong> {{ $hasilDiagnosa->Deskripsi_Penyakit->deskripsi_penyakit }}</li>
            </ul>

            <hr style="margin: 8px 0;">

            <h5 class="text-custom"><b>4. Solusi</b></h5>
            <div class="list-group">
                @foreach (json_decode($hasilDiagnosa->Solusi_Penyakit->solusi) as $solusi)
                    <a href="#" class="list-group-item list-group-item-action" style="padding: 4px 8px;">{{ $solusi }}</a>
                @endforeach
            </div>
        </div>
        <div class="card-footer"></div>
    </div>

    <script>
        window.print();
    </script>
</body>
</html>l

