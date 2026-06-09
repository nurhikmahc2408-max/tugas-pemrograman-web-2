<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_karyawan',
        'jabatan',
        'alamat',
        'no_hp',
        'departemen_id',
    ];

    protected $with = ['departemen'];

    public function departemen(): BelongsTo
    {
        return $this->belongsTo(Departemen::class);
    }
}