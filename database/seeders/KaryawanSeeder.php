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
        $dataDepartemen = [
            'IT' => [
                'Andi',
                'Budi',
                'Citra',
                'Dian',
                'Eko',
            ],
            'Keuangan' => [
                'Fajar',
                'Gina',
                'Hendra',
                'Indah',
                'Joko',
            ],
            'SDM' => [
                'Kiki',
                'Lina',
                'Maya',
                'Nanda',
                'Oki',
            ],
            'Marketing' => [
                'Putri',
                'Rian',
                'Santi',
                'Tono',
                'Vina',
            ],
        ];

        foreach ($dataDepartemen as $namaDepartemen => $namaKaryawans) {
        $departemen = Departemen::query()
            ->where('nama_departemen', $namaDepartemen)
            ->first();
            if ($departemen) {

                foreach ($namaKaryawans as $namaKaryawan) {

                    Karyawan::factory()->create([
                        'departemen_id' => $departemen->id,
                        'nama_karyawan' => $namaKaryawan,
                    ]);

                }

            }

        }
    }
}