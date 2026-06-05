<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departemen extends Model
{
    protected $fillable = [
        'nama_departemen',
        'kepala_departemen',
        'lokasi',
    ];

    public function karyawans(): HasMany
    {
        return $this->hasMany(Karyawan::class);
    }
}