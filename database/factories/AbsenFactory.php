<?php

namespace Database\Factories;

use App\Models\Absen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Absen>
 */
class AbsenFactory extends Factory
{
    protected $model = Absen :: class;
    
    public function definition(): array
    {
        return [
            'nama_karyawan' => fake()->name(),
            'tanggal' => fake()->date(),
            'jam_masuk' => fake()->time(),
            'jam_keluar' => fake()->time(),
            'status' => fake()->randomElement([
                'Hadir',
                'Izin',
                'Sakit',
                'Alfa'
            ]),
        ];
    }
}