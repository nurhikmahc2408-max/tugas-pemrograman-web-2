<?php

namespace Database\Factories;

use App\Models\Karyawan;
use App\Models\Departemen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'departemen_id' => Departemen::factory(),
            'nama_karyawan' => fake()->name(),
            'jabatan' => fake()->jobTitle(),
            'alamat' => fake()->address(),
            'no_hp' => fake()->phoneNumber(),
        ];
    }
}