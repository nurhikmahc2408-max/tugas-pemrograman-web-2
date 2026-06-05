<?php

namespace Database\Seeders;

use App\Models\Departemen;
use App\Models\Karyawan;
use Illuminate\Database\Seeder;

class DepartemenSeeder extends Seeder
{
    public function run(): void
    {
        $dataDepartemen = [
            'IT' => ['Andi', 'Budi', 'Citra'],
            'Keuangan' => ['Fajar', 'Gina', 'Hendra'],
            'SDM' => ['Kiki', 'Lina', 'Maya'],
            'Marketing' => ['Putri', 'Rian', 'Santi'],
        ];

 foreach ($dataDepartemen as $namaDepartemen => $karyawans) {
$departemen = Departemen::query()
    ->where('nama_departemen', '=', $namaDepartemen)
    ->first();

            if ($departemen) {

                foreach ($karyawans as $namaKaryawan) {

                    Karyawan::factory()->create([
                        'departemen_id' => $departemen->id,
                        'nama_karyawan' => $namaKaryawan,
                    ]);
                }
            }
        }
    }
}