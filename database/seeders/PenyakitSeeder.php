<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("Penyakit")->insert(
            [
                [
                    'kode_penyakit' => 'P1',
                    'nama_penyakit' => 'Penyakit Mulut dan Kuku (PMK)',
                    'deskripsi_penyakit' => 'Penyakit yang disebabkan oleh virus dan menyebabkan kematian yang sangat tinggi',
                    'solusi' => json_encode(['Memanggil dokter hewan secepatnya'])
                ],
                [
                    'kode_penyakit' => 'P2',
                    'nama_penyakit' => 'Penyakit Kuku Bukan PMK',
                    'deskripsi_penyakit' => 'Penyakit yang disebabkan oleh virus atau bakteri dan tidak memiliki efek yang berbahaya seperti PMK',
                    'solusi' => json_encode(['Ke dokter Hewan secepatnya'])
                ]
            ]
        );
    }
}
