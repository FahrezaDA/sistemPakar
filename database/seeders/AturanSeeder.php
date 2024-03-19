<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aturan')->insert([
            [
            'kode_penyakit' => 'P1',
            'kode_gejala' =>'G1',
            ],
            [
            'kode_penyakit' => 'P1',
            'kode_gejala' =>'G2',
                ],
                [
                    'kode_penyakit' => 'P1',
                    'kode_gejala' =>'G3',
                    ],
                    [
                        'kode_penyakit' => 'P2',
                        'kode_gejala' =>'G3',
                        ],

                        [
                            'kode_penyakit' => 'P1',
                            'kode_gejala' =>'G4',
                            ],
                            [
                                'kode_penyakit' => 'P2',
                                'kode_gejala' =>'G4',
                                ],
                                [
                                    'kode_penyakit' => 'P1',
                                    'kode_gejala' =>'G5',
                                    ],
                                    [
                                        'kode_penyakit' => 'P2',
                                        'kode_gejala' =>'G5',
                                        ],
                                        [
                                            'kode_penyakit' => 'P1',
                                            'kode_gejala' =>'G6',
                                            ],
                                            [
                                                'kode_penyakit' => 'P2',
                                                'kode_gejala' =>'G6',
                                                ],
                                                [
                                                    'kode_penyakit' => 'P1',
                                                    'kode_gejala' =>'G7',
                                                    ],
                                                    [
                                                        'kode_penyakit' => 'P1',
                                                        'kode_gejala' =>'G8',
                                                        ],

                                                        [
                                                            'kode_penyakit' => 'P2',
                                                            'kode_gejala' =>'G8',
                                                            ],
                                                            [
                                                                'kode_penyakit' => 'P1',
                                                                'kode_gejala' =>'G9',
                                                                ],
                                                                [
                                                                    'kode_penyakit' => 'P2',
                                                                    'kode_gejala' =>'G9',
                                                                    ],
                                                                    [
                                                                        'kode_penyakit' => 'P1',
                                                                        'kode_gejala' =>'G10',
                                                                        ],
                                                                        [
                                                                            'kode_penyakit' => 'P2',
                                                                            'kode_gejala' =>'G11',
                                                                            ],
                                                                            [
                                                                                'kode_penyakit' => 'P2',
                                                                                'kode_gejala' =>'G12',
                                                                                ],
        ]);
    }
}
