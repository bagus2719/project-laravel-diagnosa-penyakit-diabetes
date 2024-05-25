<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    protected $table = 'gejala';
    protected $primaryKey = 'id_gejala';
    public $timestamps = true;

    protected $fillable = [
        'nama_gejala'
    ];

    public function riwayat()
    {
        return $this->hasMany(Riwayat::class, 'id_gejala');
    }

    public function rule()
    {
        return $this->hasMany(Rule::class, 'id_gejala');
    }
}