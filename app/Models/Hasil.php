<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $table = 'hasil';
    protected $primaryKey = 'id_hasil';
    public $timestamps = true;

    protected $fillable = [
        'id_pasien',
        'hasil'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    public function riwayat()
    {
        return $this->hasMany(Riwayat::class, 'id_hasil');
    }
}