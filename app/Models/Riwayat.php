<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $table = 'riwayat';
    protected $primaryKey = 'id_riwayat';
    public $timestamps = true;

    protected $fillable = [
        'id_pasien',
        'id_gejala',
        'id_penyakit',
        'id_hasil'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'id_gejala');
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'id_penyakit');
    }

    public function hasil()
    {
        return $this->belongsTo(Hasil::class, 'id_hasil');
    }
}