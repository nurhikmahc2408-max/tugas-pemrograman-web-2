<?php

namespace Database\Seeders;

use App\Models\Departemen;
use Illuminate\Database\Seeder;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departemens = [
            [
                'nama_departemen' => 'IT',
                'kode_departemen' => 'DEP' . fake()->unique()->numberBetween(100, 999),
                'lokasi' => 'Lantai 3 Gedung Utama',
            ],
            [
                'nama_departemen' => 'Keuangan',
                'kode_departemen' => 'DEP' . fake()->unique()->numberBetween(100, 999),
                'lokasi' => 'Lantai 2 Gedung Utama',
            ],
            [
                'nama_departemen' => 'SDM',
                'kode_departemen' => 'DEP' . fake()->unique()->numberBetween(100, 999),
                'lokasi' => 'Lantai 1 Gedung Utama',
            ],
            [
                'nama_departemen' => 'Marketing',
                'kode_departemen' => 'DEP' . fake()->unique()->numberBetween(100, 999),
                'lokasi' => 'Gedung Marketing',
            ],
            [
                'nama_departemen' => 'Produksi',
                'kode_departemen' => 'DEP' . fake()->unique()->numberBetween(100, 999),
                'lokasi' => 'Area Produksi',
            ],
            [
                'nama_departemen' => 'Operasional',
                'kode_departemen' => 'DEP' . fake()->unique()->numberBetween(100, 999),
                'lokasi' => 'Gedung Operasional',
            ],
            [
                'nama_departemen' => 'Logistik',
                'kode_departemen' => 'DEP' . fake()->unique()->numberBetween(100, 999),
                'lokasi' => 'Gudang Utama',
            ],
            [
                'nama_departemen' => 'Customer Service',
                'kode_departemen' => 'DEP' . fake()->unique()->numberBetween(100, 999),
                'lokasi' => 'Lantai Dasar',
            ],
        ];

        foreach ($departemens as $departemen) {
            Departemen::create($departemen);
        }
    }
}