<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $table = 'rule';
    protected $primaryKey = 'id_rule';
    public $timestamps = true;

    protected $fillable = [
        'id_gejala',
        'id_penyakit'
    ];

    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'id_gejala');
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'id_penyakit');
    }
}