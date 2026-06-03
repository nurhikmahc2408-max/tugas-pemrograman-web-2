<?php

namespace Database\Factories;

use App\Models\Absen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Absen>
 */
class AbsenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    'Nama_Karyawan' => fake()->name(),
    'tanggal' => fake()->date(),
    'jam_masuk' => fake()->time('H:i:s'),
    'jam_keluar' => fake()->time('H:i:s'),
    'status' => fake()->randomElement(['Hadir', 'Izin', 'Sakit', 'Alfa']),
];
    }
}
