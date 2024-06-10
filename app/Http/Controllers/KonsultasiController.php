<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Hasil;
use App\Models\Diagnosa;
use App\Models\Aturan;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataGejala = Gejala::all();
        $penyakits = Penyakit::all();
        return view('konsultasi.diagnosa', compact('dataGejala', 'penyakits'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }
    /**
     * Display the specified resource.
     */
    public function showdata($id_hasil)
{
    $dataDiagnosa = Hasil::find($id_hasil)->toArray();

    $dataTampilan = [
        'navLink' => 'diagnosa',
        'dataDiagnosa' => $dataDiagnosa,
        'hasilDiagnosa' => json_decode($dataDiagnosa['hasil_diagnosa'])
    ];

    return view('konsultasi.hasilDiagnosa', $dataTampilan);
}

public function cetakHasil($id_hasil)
{
    $dataDiagnosa = Hasil::find($id_hasil)->toArray();

    $dataTampilan = [
        'navLink' => 'diagnosa',
        'dataDiagnosa' => $dataDiagnosa,
        'hasilDiagnosa' => json_decode($dataDiagnosa['hasil_diagnosa'])
    ];

    return view('konsultasi.cetak-diagnosa', $dataTampilan);
}


    public function hitungKonsultasi(Request $request)
    {
        $validateReq = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            // 'jenis_sapi' => 'required'
        ]);

        $arrHasilUser = $request->input('resultGejala');

//pengecekan apakah user sudah memilih 2 gejala apa belum
        if ($arrHasilUser == null) {
            return back()->withInput()->with('error', 'Anda belum memilih gejala');
        } else {
            if (count($arrHasilUser) < 2) {
                return back()->withInput()->with('error', 'Minimal gejala yang dipilih adalah 2 gejala');
            } else {
                foreach ($arrHasilUser as $key => $value) {
                    $dataPenyakit[$key] = Aturan::where('kode_gejala', $value)
                        ->select('kode_penyakit')
                        ->get()
                        ->toArray();
                    foreach ($dataPenyakit[$key] as $a => $b) {
                        $resultData[$key]['daftar_penyakit'][$a] = $b['kode_penyakit'];
                    }
                    $dataNilaiDensitas[$key] = Gejala::where('kode_gejala', $value)
                        ->select('nilai_densitas', 'gejala')
                        ->get()
                        ->toArray();
                    $dataGejala[$key] = $dataNilaiDensitas[$key][0]['gejala'];
                    $resultData[$key]['belief'] = $dataNilaiDensitas[$key][0]['nilai_densitas'];
                    $resultData[$key]['plausibility'] = 1 - $dataNilaiDensitas[$key][0]['nilai_densitas'];
                }

                $variabelTampilan = $this->mulaiPerhitungan($resultData);

                foreach ($dataGejala as $key => $value) {
                    $variabelTampilan['Gejala_Penyakit'][$key]['kode_gejala'] = $arrHasilUser[$key];
                    $variabelTampilan['Gejala_Penyakit'][$key]['nama_gejala'] = $value;
                }

                // Penyimpanan Step Pertama
                $diagnosa = new Diagnosa();
                $diagnosa->nama = $validateReq['nama'];
                $diagnosa->alamat = $validateReq['alamat'];
                $diagnosa->save();
                $idDiagnosa = $diagnosa->id_diagnosa;

                // Penyimpanan Step Kedua
                $hasil = new Hasil();
                $hasil->nama = $validateReq['nama'];
                $hasil->alamat = $validateReq['alamat'];
                $hasil->tanggal = Carbon::now()->toDateString();
                // $hasil->jenis_sapi = $validateReq['jenis_sapi'];
                $hasil->hasil_diagnosa = json_encode($variabelTampilan);
                $hasil->solusi = $variabelTampilan['Solusi_Penyakit']['solusi'];

                $hasil->save();
                $idHasil = $hasil->id_hasil;


                    return redirect()->to('diagnosa/' . $idHasil);


            }
        }
    }

    public function mulaiPerhitungan($dataAcuan)
    {
        $x = 0;
        for ($i = 0; $i < count($dataAcuan); $i++) {
            $hasilKonversi[$i]['data'][0]['array'] = $dataAcuan[$i]['daftar_penyakit'];
            $hasilKonversi[$i]['data'][0]['value'] = $dataAcuan[$i]['belief'];
            $hasilKonversi[$i]['data'][1]['array'] = [];
            $hasilKonversi[$i]['data'][1]['value'] = $dataAcuan[$i]['plausibility'];

            $x++;
        }

        $result = $this->startingPoint(count($hasilKonversi) - 2, $hasilKonversi);

        $arrResult = [];
        foreach ($result['data'] as $key => $value) {
            $arrResult[$key] = $value['value'];
        }

        $indexMaxValue = array_search(max($arrResult), $arrResult);
        $nilaiBelief = round($result['data'][$indexMaxValue]['value'], 2);
        $persentase = (round($result['data'][$indexMaxValue]['value'], 2) * 100) . " %";

        $kodePenyakit = $result['data'][$indexMaxValue]['array'][0];
        $dataPenyakit = Penyakit::where('kode_penyakit', $kodePenyakit)
            ->select('nama_penyakit')
            ->get()
            ->toArray()[0];
        $dataSolusi = Penyakit::where('kode_penyakit', $kodePenyakit)
            ->select('solusi')
            ->get()
            ->toArray()[0];
            $dataDeskripsi = Penyakit::where('kode_penyakit', $kodePenyakit)
            ->select('deskripsi_penyakit')
            ->get()
            ->toArray()[0];

        $jsonData = [
            'Nama_Penyakit' => $dataPenyakit,
            'Nilai_Belief_Penyakit' => $nilaiBelief,
            'Persentase_Penyakit' => $persentase,
            'Solusi_Penyakit' => $dataSolusi,
            'Deskripsi_Penyakit' => $dataDeskripsi,
        ];

        return $jsonData;
    }

    public function startingPoint(int $jumlah, array $myData, $data = [], int $indeks = 0)
    {
        if (count($data) == 0) {
            $hasilAkhir = $this->kalkulatorPerhitungan($myData[$indeks], $myData[$indeks + 1]);
        } else {
            $hasilAkhir = $this->kalkulatorPerhitungan($data, $myData[$indeks + 1]);
        }

        if ($indeks < $jumlah) {
            return $this->startingPoint($jumlah, $myData, $hasilAkhir, $indeks + 1);
        } else {
            return $hasilAkhir;
        }
    }

    public function kalkulatorPerhitungan($array1, $array2)
    {
        $hasilAkhir['data'] = [];

        $hasilSementara = [];
        $z = 0;
        for ($x = 0; $x < count($array1['data']); $x++) {
            for ($y = 0; $y < count($array2['data']); $y++) {
                if (count($array1['data'][$x]['array']) != 0 && count($array2['data'][$y]['array']) != 0) {
                    $hasilSementara[$z]['array'] = json_encode(array_values(array_intersect($array1['data'][$x]['array'], $array2['data'][$y]['array'])));
                    if (count(json_decode($hasilSementara[$z]['array'])) == 0) {
                        $hasilSementara[$z]['status'] = "Himpunan Kosong";
                    }
                } else {
                    $hasilSementara[$z]['array'] = json_encode(array_merge($array1['data'][$x]['array'], $array2['data'][$y]['array']));
                }
                $hasilSementara[$z]['value'] = $array1['data'][$x]['value'] * $array2['data'][$y]['value'];
                $z++;
            }
        }

        $pushArray = [];
        foreach ($hasilSementara as $hasil) {
            array_push($pushArray, $hasil['array']);
        }

        $pushArrayCat = [];
        foreach (array_count_values($pushArray) as $key => $value) {
            array_push($pushArrayCat, $key);
        }

        $tetapan = 0;
        foreach ($hasilSementara as $datahasil) {
            if (isset($datahasil['status']) && $datahasil['status'] == "Himpunan Kosong") {
                $tetapan += $datahasil['value'];
            }
        }

        $tetapan = 1 - $tetapan;

        $finalResult = [];
        for ($y = 0; $y < count($pushArrayCat); $y++) {
            $decode[$y] = json_decode($pushArrayCat[$y]);
            $finalResult[$y]['array'] = $decode[$y];
            $finalResult[$y]['value'] = 0;
            for ($x = 0; $x < count($hasilSementara); $x++) {
                $array[$x] = json_decode($hasilSementara[$x]['array']);
                if ($decode[$y] == $array[$x]) {
                    if (!isset($hasilSementara[$x]['status'])) {
                        $finalResult[$y]['value'] += $hasilSementara[$x]['value'];
                    }
                }
            }
            $finalResult[$y]['value'] = $finalResult[$y]['value'] / $tetapan;
        }

        for ($i = 0; $i < count($finalResult); $i++) {
            $hasilAkhir['data'][$i] = $finalResult[$i];
        }

        return $hasilAkhir;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
