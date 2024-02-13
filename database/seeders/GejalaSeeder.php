<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gejala')->insert(
            [
            [
            'kode_gejala' => 'G1',
            'gejala' =>'Terdapat ulcer atau luka di lidah, bibir, mulut, dan kuku kaki'
            ],
            [
                'kode_gejala' => 'G2',
                'gejala' =>'Sapi mengalami demam dan lesu'
            ],
            [
                'kode_gejala' => 'G3',
                'gejala' =>'Sapi mengalami kehilangan nafsu makan'
            ],
            [
                'kode_gejala' => 'G4',
                'gejala' =>' Produksi susu sapi menurun'
            ],
            [
                'kode_gejala' => 'G5',
                'gejala' =>'Sapi mengalami kesulitan bergerak atau berjalan karena rasa sakit yang dialami'
            ],
            [
                'kode_gejala' => 'G6',
                'gejala' =>'Kuku kaki mengalami pembengkakan dan kerusakan'
            ],
            [
                'kode_gejala' => 'G7',
                'gejala' =>'keluar air liur yang berlebihan'
            ],
            [
                'kode_gejala' => 'G8',
                'gejala' =>'Ambruk atau tidak dapat berdiri'
            ],
            [
                'kode_gejala' => 'G9',
                'gejala' =>' Kondisi fisik yang kurus atau menurun'
            ],
            [
                'kode_gejala' => 'G10',
                'gejala' =>'Terjadi tanda-tanda pernapasan yang abnormal, seperti kesulitan bernapas dan batuk'
            ],
            [
                'kode_gejala' => 'G11',
                'gejala' =>'Luka atau bisul pada kuku atau jari kaki'
            ],
            [
                'kode_gejala' => 'G12',
                'gejala' =>'Terlihat cairan atau nanah keluar dari kuku atau jari kaki'
            ]
        ]);
    }
}
