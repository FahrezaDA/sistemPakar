<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $table = 'tabel_data_hasil';
    protected $primaryKey = 'id_hasil';
    protected $fillable = [
        'nama',
        'alamat',
        'jenis_sapi',
        'hasil_diagnosa',
        'solusi'
    ];
}
