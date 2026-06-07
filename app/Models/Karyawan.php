<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'nama_karyawan',
    'jabatan',
    'alamat',
    'no_hp',
    'departemen_id'
])]
class Karyawan extends Model
{
    use HasFactory;

    protected $with = ['departemen'];

    public function departemen(): BelongsTo
    {
        return $this->belongsTo(Departemen::class);
    }
}