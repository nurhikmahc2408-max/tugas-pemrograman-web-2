<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use App\Models\Departemen;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $karyawans = [
            [
                'nama_karyawan' => 'Andi Saputra',
                'jabatan' => 'Manager',
                'alamat' => 'Makassar',
                'departemen_id' => 1,
            ],
            [
                'nama_karyawan' => 'Budi Santoso',
                'jabatan' => 'Staff IT',
                'alamat' => 'Gowa',
                'departemen_id' => 1,
            ],
            [
                'nama_karyawan' => 'Citra Dewi',
                'jabatan' => 'Staff HRD',
                'alamat' => 'Maros',
                'departemen_id' => 2,
            ],
            [
                'nama_karyawan' => 'Dian Pratama',
                'jabatan' => 'Supervisor',
                'alamat' => 'Takalar',
                'departemen_id' => 2,
            ],
            [
                'nama_karyawan' => 'Eko Wijaya',
                'jabatan' => 'Admin',
                'alamat' => 'Makassar',
                'departemen_id' => 3,
            ],
        ];

        foreach ($karyawans as $karyawan) {
            Karyawan::create($karyawan);
        }
    }
}