<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable([
'Nama_Karyawan',
    'tanggal',
    'jam_masuk',
    'jam_keluar',
    'status'
])]

class Absen extends Model
{
    /** @use HasFactory<\Database\Factories\AbsenFactory> */
    use HasFactory;
}
