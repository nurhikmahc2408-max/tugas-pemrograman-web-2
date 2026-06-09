<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;


use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $fillable = [
        'nama_departemen',
        'kode_departemen',
        'lokasi',
    ];
    public function karyawans(): HasMany
    {
        return $this->hasMany(Karyawan::class);
    }
}
    