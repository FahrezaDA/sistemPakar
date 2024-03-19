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
            'gejala' =>'Terdapat ulcer atau luka di lidah, bibir, mulut, dan kuku kaki',
            'nilai_densitas'=>'0.9',
            ],
            [
                'kode_gejala' => 'G2',
                'gejala' =>'Sapi mengalami demam dan lesu',
                'nilai_densitas'=>'0.5',
            ],
            [
                'kode_gejala' => 'G3',
                'gejala' =>'Sapi mengalami kehilangan nafsu makan',
                'nilai_densitas'=>'0.4',
            ],
            [
                'kode_gejala' => 'G4',
                'gejala' =>' Produksi susu sapi menurun',
                'nilai_densitas'=>'0.4',
            ],
            [
                'kode_gejala' => 'G5',
                'gejala' =>'Sapi mengalami kesulitan bergerak atau berjalan karena rasa sakit yang dialami',
                'nilai_densitas'=>'0.5',

            ],
            [
                'kode_gejala' => 'G6',
                'gejala' =>'Kuku kaki mengalami pembengkakan dan kerusakan',
                'nilai_densitas'=>'0.9',
            ],
            [
                'kode_gejala' => 'G7',
                'gejala' =>'keluar air liur yang berlebihan',
                'nilai_densitas'=>'0.9',
            ],
            [
                'kode_gejala' => 'G8',
                'gejala' =>'Ambruk atau tidak dapat berdiri',
                'nilai_densitas'=>'0.9',
            ],
            [
                'kode_gejala' => 'G9',
                'gejala' =>' Kondisi fisik yang kurus atau menurun',
                'nilai_densitas'=>'0.4',
            ],
            [
                'kode_gejala' => 'G10',
                'gejala' =>'Terjadi tanda-tanda pernapasan yang abnormal, seperti kesulitan bernapas dan batuk',
                'nilai_densitas'=>'0.4',
            ],
            [
                'kode_gejala' => 'G11',
                'gejala' =>'Luka atau bisul pada kuku atau jari kaki',
                'nilai_densitas'=>'0.5',
            ],
            [
                'kode_gejala' => 'G12',
                'gejala' =>'Terlihat cairan atau nanah keluar dari kuku atau jari kaki',
                'nilai_densitas'=>'0.6',

            ]
        ]);
    }
}
