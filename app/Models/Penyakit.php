<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="penyakit";
    protected $primaryKey="id_penyakit";
    protected $fillable=["kode_penyakit","nama_penyakit","deskripsi_penyakit","solusi"];

}
