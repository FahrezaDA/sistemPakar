<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    use HasFactory;

    protected $table = 'aturan';

    // Relasi ke model Gejala
    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'id_gejala');
    }

    // Relasi ke model Penyakit
    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'id_penyakit');
    }
}
