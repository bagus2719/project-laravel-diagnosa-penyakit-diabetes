<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';
    protected $primaryKey = 'id_pasien';

    protected $fillable = [
        'id_user',
        'nama_pasien',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'no_telp',
        'keterangan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function hasil()
    {
        return $this->hasMany(Hasil::class, 'id_pasien');
    }

    public function riwayat()
    {
        return $this->hasMany(Riwayat::class, 'id_pasien');
    }

    public function solusi()
    {
        return $this->hasMany(Solusi::class, 'id_pasien');
    }
}