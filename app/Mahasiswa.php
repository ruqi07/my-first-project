<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $fillable = [
        'nim', 'nama', 'fakultas', 'prodi'
    ];
}
