<?php

namespace Database\Factories;

use App\Models\Departemen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Departemen>
 */
class DepartemenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_departemen' => fake()->randomElement([
                'IT',
                'Keuangan',
                'SDM',
                'Marketing',
                'Produksi',
                'Operasional',
                'Logistik',
                'Customer Service',
            ]),
            'kode_departemen' => 'DEP' . fake()->unique()->numberBetween(100, 999),
            'lokasi' => fake()->city(),
        ];
    }
}