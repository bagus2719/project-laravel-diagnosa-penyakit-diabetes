<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = 'penyakit';
    protected $primaryKey = 'id_penyakit';
    public $timestamps = true;

    protected $fillable = [
        'nama_penyakit'
    ];

    public function riwayat()
    {
        return $this->hasMany(Riwayat::class, 'id_penyakit');
    }

    public function rule()
    {
        return $this->hasMany(Rule::class, 'id_penyakit');
    }

    public function solusi()
    {
        return $this->hasMany(Solusi::class, 'id_penyakit');
    }
}