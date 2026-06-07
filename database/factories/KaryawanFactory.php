<?php

namespace Database\Factories;

use App\Models\Karyawan;
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
            'nama_karyawan' => fake()->name(),
            'jabatan' => fake()->randomElement([
                'Manager',
                'Supervisor',
                'Staff IT',
                'Staff Keuangan',
                'Staff HRD',
                'Admin',
                'Marketing',
                'Operator',
                'Teknisi',
                'Customer Service',
            ]),
            'alamat' => fake()->address(),
            'no_hp' => fake()->phoneNumber(),
        ];
    }
}