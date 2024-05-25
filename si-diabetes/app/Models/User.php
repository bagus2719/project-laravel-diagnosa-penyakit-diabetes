<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $timestamps = true;

    protected $fillable = [
        'nama',
        'email',
        'username',
        'password'
    ];

    public function pasien()
    {
        return $this->hasMany(Pasien::class, 'id_user');
    }
}