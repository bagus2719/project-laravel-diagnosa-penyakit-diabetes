<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    protected $table = 'solusi';
    protected $primaryKey = 'id_solusi';
    public $timestamps = true;

    protected $fillable = [
        'id_penyakit',
        'solusi'
    ];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'id_penyakit');
    }
}