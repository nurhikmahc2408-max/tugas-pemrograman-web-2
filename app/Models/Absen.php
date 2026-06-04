<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Absen extends Model
{
    /** @use HasFactory<\Database\Factories\AbsenFactory> */
    use HasFactory;
    protected $fillable = [
        'nama_karyawan',
        'tanggal',
        'jam_masuk',
        'jam_keluar',
        'status'
    ];
}
