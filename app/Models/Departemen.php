<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'nama_departemen',
    'kode_departemen',
    'lokasi'
])]
class Departemen extends Model
{
    public function karyawans(): HasMany
    {
        return $this->hasMany(Karyawan::class);
    }
}