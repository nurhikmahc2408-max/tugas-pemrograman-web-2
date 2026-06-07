<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $fillable = [
        'nama_departemen',
        'kode_departemen',
        'alamat_kantor',
    ];
}